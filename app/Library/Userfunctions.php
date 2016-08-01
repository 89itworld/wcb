<?php
/**
 * Created by PhpStorm.
 * User: Amuk
 * Date: 20-05-2016
 * Time: 11:11
 */
namespace App\library;
use App\Models\Coupons;
use App\Models\Settings;
class Userfunctions{
    /**
     * @param       $button
     * @param       $url
     * @param array $dataToPost
     * @param array $options
     */
    function postLink($button,$url,array $dataToPost,array $options=null){
        $id  ='post_'.$this->generateRandomString(25);
        $form='<form style="display:none;" name="'.$id.'" method="post" action="'.$url.'">';
        foreach($dataToPost as $k=>$v){
            $form.="<input type='hidden' name='".$k."' value='".$v."' />";
        }
        $form.='<input type="hidden" name="_token" value='.csrf_token().'>';
        $form.="</form>";
        if(!empty($options)&&is_array($options)){
            $attr='';
            foreach($options as $opK=>$opV){
                if($opK!='confirm'){
                    $attr.=" ".$opK."='".$opV."' ";
                }
            }
        }
        if(!empty($options['confirm'])){
            $onclick="if(confirm('".$options['confirm']."')){document.".$id.".submit();}else{return false;}";
        }else{
            $onclick="javascript:document.".$id.".submit();";
        }
        if(isset($attr)){
            $form.="<a href='javascript:void(0);' onclick=\"".$onclick."\"".$attr.">".$button."</a>";
        }else{
            $form.="<a href='javascript:void(0);' onclick='".$onclick."' >".$button."</a>";
        }

        return $form;
    }

    function generateRandomString($length) {
        $chars = array_merge(range('a', 'z'), range(0, 9));
        shuffle($chars);
        return implode(array_slice($chars, 0,$length));
    }

    /**
     * Remove special char and replace space to "-" from retailers name and, Create Slug for Retailsers.
     * @param $name
     * @return string
     */
    function slug($name){
        $name        =trim($name);
        $unique_title=preg_replace('/[^A-Za-z0-9\-\s\&]/',' ',$name);
        $unique_title=trim($unique_title);
        $unique_title=str_ireplace(' ','-',$unique_title);
        $unique_title=strtolower($unique_title);
        $unique_title=htmlentities($unique_title);
        $unique_title.='.html';

        return $unique_title;
    }




    public static function GetStoreReviewsTotal($retailer_id, $all = 0, $word = 1)
    {
        
        if ($all == 1)
            $result=Coupons::where('retailer_id',(int)$retailer_id)->count();
        else
            $result=Coupons::where('retailer_id',(int)$retailer_id)->where('status','active')->count();
   
        
        $total_reviews = $result;

        if ($word == 1)
        {
            if ($total_reviews == 0)
                $total_reviews = "No reviews";
            else if ($total_reviews == 1)
                $total_reviews .= " review";
            else
                $total_reviews .= " reviews";
        }

        return $total_reviews;
    }
    public static function GetStoreCouponsTotal($retailer_id)
    {
        $coupon_total=Coupons::where('retailer_id', (int)$retailer_id)->where('status', 'active')->count();
        return($coupon_total);
    }

   public static  function DisplayCashback($value)
    {
        if (empty($value) || $value == "")
        {
            return "";
        }
        if (strstr($value,'%'))
        {
            $cashback = $value;
        }
        elseif (strstr($value,'points'))
        {
            $cashback = str_replace("points"," ".'points',$value);
        }
        else
        {
            switch (Config('constants.SITE_CURRENCY_FORMAT'))
            {
                case "1": $cashback = Config('constants.SITE_CURRENCY').$value; break;
                case "2": $cashback = Config('constants.SITE_CURRENCY')." ".$value; break;
                case "3": $cashback = Config('constants.SITE_CURRENCY').number_format($value, 2, ',', ''); break;
                case "4": $cashback = $value." ".Config('constants.SITE_CURRENCY'); break;
                case "5": $cashback = $value.Config('constants.SITE_CURRENCY'); break;
                default: $cashback = Config('constants.SITE_CURRENCY').$value; break;
            }
        }

        return $cashback;
    }

    public static function GetRetailerLink_BySlug($slug, $retailer_title = "")
    {
        $slug = $slug;
        $retailer_link = Config('constants.SITE_URL') . "view-retailer/" . $slug;
        return $retailer_link;
    }
    public static function getSettings($search){

        //$setting_data=Settings::where('setting_key','website_currency')->select(['setting_value'])->get();

        print_r($search);exit;
        /*$setting_data=Settings::where('setting_key',$search)->select(['setting_value'])->get();
        print_r($search);exit;*/
    }
}
