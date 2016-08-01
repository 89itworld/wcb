<?php

namespace App\Helpers;
use Illuminate\Support\Facades\DB;
use App\Models\Categories;
use App\Models\Transaction;



class MyHlp {

   public static  function getCategories(){
          $categories = Categories::all();
          return $categories;
      }
    public static function getCashBacks(){
        $cashback=DB::select("SELECT title, slug, url, image FROM retailers WHERE featured='1' AND (end_date='0000-00-00 00:00:00' OR end_date > NOW()) AND status='active' ORDER BY RAND() LIMIT 12");
        return $cashback;
    }
    public static function getRetailers(){
        $home_category=array('21'=>'Other','17'=>'Shoes','7'=>'Electronics','35'=>'Mobile Phones','34'=>'Travel','2'=>'Clothes and Fashion');
        $i=0;
        $where="" ;
        $temp_arr=$home_category;
        $retailers_per_category=array();
        $categoryIds="";
        for($j=0;$j<count($temp_arr);$j++){
            $cat_id=array_pop($home_category);
            $key = array_search($cat_id, $temp_arr);
            if($i>0){
                $where = "retailer_to_category.retailer_id NOT IN (" .$categoryIds.") AND";
            }
            $row_retailers_per_category=DB::select("SELECT retailer_to_category.retailer_id FROM retailer_to_category inner join retailers on retailer_to_category.retailer_id=retailers.retailer_id WHERE retailers.status='active' AND $where category_id='$key' limit 4");
            foreach($row_retailers_per_category as $retailer_id){
                $retailers_per_category[$i][] = $retailer_id->retailer_id;
            }
            if($i>=1&&$i<6) {
                $categoryIds .= ",";
            }
            $categoryIds.=implode(",", $retailers_per_category[$i]);
            $i=$i+1;
        }
        // $this->pr($retailers_per_category,1);
        $cat_retailers=array();
        foreach($retailers_per_category as $retailer){
            $new_where = "retailer_id  IN (" .implode(",",$retailer).")";
            $cat_retailers[array_pop($temp_arr)]=DB::select("SELECT retailer_id, title, slug, url, image,cashback FROM retailers WHERE $new_where ");

        }
        return $cat_retailers;
    }
    public static function getTruncateText($text, $limit, $more_link = 0)
    {

        $limit = (int)$limit;
        $tags = array("<p>", "</p>");

        $text= str_replace($tags, "", $text);


        if ($limit > 0 && strlen($text) > $limit)
        {
            $ntext = substr($text, 0, $limit);
            $stop=strrpos($ntext, ' ');
           $ntext = substr($ntext, 0, $stop);

      /*      $break_line=strpos($ntext, PHP_EOL);
            print_r($text);exit;
            $newtext='<div style="font-weight: bolder;">'.substr($ntext, 0, $break_line).'</div>';
            $newtext .=' '.substr($ntext, $break_line, $limit);*/
            $ttext = $ntext;

            if ($more_link == 1)
            {
                $ttext .= '<a id="next-button">Show More &raquo;</a><span id="hide-text-block" style="display: none">'.substr($text, $stop,strlen($text)).' <a id="prev-button" style="display: none">&laquo; Show Less</a></span>';
            }
            else
            {
                $ttext .= " ...";
            }

        }
        else
        {
            $ttext = $text;
        }
      /*  print_r($text);
        print_r(substr($text, $limit-1,strlen($text)));exit;*/
        return $ttext;
    }

    public static function GetUserBalance($userid, $hide_currency_option = 0)
    {
      /*  $total=Transaction::where('user_id',(int)$userid)
            ->where('status','confirmed')
            ->where(function($query) use($userid){return $query->where('user_id',(int)$userid)->where(function($innser_q2){return $innser_q2->where('status','paid')->orWhere('status','request');})->select(DB::raw('SUM(amount) as amount1'))->from(with(new Transaction())->getTable())
                ->orWhere(function($innser_q){return $innser_q->where('payment_type','Withdrawal')->orWhere('status','declined');});})
            ->select(DB::raw('SUM(amount)'))->get();*/
        $row_confirmed=Transaction::where('user_id',(int)16)
            ->where('status','confirmed')
            ->select(DB::raw('SUM(amount) as total'))->first();
        $row_paid=0;
      if($row_confirmed->total>0)
      {
          $row_paid=Transaction::where('user_id',(int)16)->where(function($query){$query->where('status','paid')->orWhere('status','request');})->orWhere(function($inner_query){return $inner_query->where('payment_type','Withdrawal')->where('status','declined');})
              ->select(DB::raw('SUM(amount) as total'))->first();
          $balance=$row_confirmed->total-$row_paid->total;
          return MyHlp::DisplayMoney($balance, $hide_currency_option);
      }
        return MyHlp::DisplayMoney(0, $hide_currency_option);



        /*$query = "SELECT SUM(amount) AS total FROM cashbackengine_transactions WHERE user_id='".(int)$userid."' AND status='confirmed'";
        $result = smart_mysql_query($query);

        if (mysql_num_rows($result) != 0)
        {
            $row_confirmed = mysql_fetch_array($result);

            if ($row_confirmed['total'] > 0)
            {
                $row_paid = mysql_fetch_array(smart_mysql_query("SELECT SUM(amount) AS total FROM cashbackengine_transactions WHERE user_id='".(int)$userid."' AND ((status='paid' OR status='request') OR (payment_type='Withdrawal' AND status='declined'))"));

                $balance = $row_confirmed['total'] - $row_paid['total'];

                return DisplayMoney($balance, $hide_currency_option);
            }
            else
            {
                return DisplayMoney(0, $hide_currency_option);
            }

        }
        else
        {
            return DisplayMoney("0.00", $hide_currecy_option);
        }*/
    }

  public static function DisplayMoney($amount, $hide_currency = 0, $hide_zeros = 0)
    {
        $newamount = number_format($amount, 2, '.', '');

        if ($hide_zeros == 1)
        {
            $cents = substr($newamount, -2);
            if ($cents == "00") $newamount = substr($newamount, 0, -3);
        }

        if ($hide_currency != 1)
        {
            switch (Config('constants.SITE_CURRENCY_FORMAT'))
            {
                case "1": $newamount = Config('constants.SITE_CURRENCY').$newamount; break;
                case "2": $newamount = Config('constants.SITE_CURRENCY')." ".$newamount; break;
                case "3": $newamount = Config('constants.SITE_CURRENCY').number_format($amount, 2, ',', ''); break;
                case "4": $newamount = $newamount." ".Config('constants.SITE_CURRENCY'); break;
                case "5": $newamount = $newamount.Config('constants.SITE_CURRENCY'); break;
                default: $newamount = Config('constants.SITE_CURRENCY').$newamount; break;
            }
        }

        return $newamount;
    }
}
