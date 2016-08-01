<?php
/**
 * Created by PhpStorm.
 * User: Amuk
 * Date: 10-05-2016
 * Time: 15:40
 */
namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;

use Illuminate\Contracts\Auth\Guard;
use Hash;

class UserController extends Controller
{

    public function getRegistration()
    {
        $categories = $this->getCategories();
        $home_category = array('21' => 'Other', '17' => 'Shoes', '7' => 'Electronics', '35' => 'Mobile Phones', '34' => 'Travel', '2' => 'Clothes and Fashion');
        $i = 0;
        $where = "";
        $temp_arr = $home_category;
        $retailers_per_category = array();
        $categoryIds = "";
        for ($j = 0; $j < count($temp_arr); $j++) {
            $cat_id = array_pop($home_category);
            $key = array_search($cat_id, $temp_arr);
            if ($i > 0) {
                $where = "retailer_to_category.retailer_id NOT IN (" . $categoryIds . ") AND";
            }
            $row_retailers_per_category = DB::select("SELECT retailer_to_category.retailer_id FROM retailer_to_category inner join retailers on retailer_to_category.retailer_id=retailers.retailer_id WHERE retailers.status='active' AND $where category_id='$key' limit 4");
            foreach ($row_retailers_per_category as $retailer_id) {
                $retailers_per_category[$i][] = $retailer_id->retailer_id;
            }
            if ($i >= 1 && $i < 6) {
                $categoryIds .= ",";
            }
            $categoryIds .= implode(",", $retailers_per_category[$i]);
            $i = $i + 1;
        }
        // $this->pr($retailers_per_category,1);
        $cat_retailers = array();
        foreach ($retailers_per_category as $retailer) {
            $new_where = "retailer_id  IN (" . implode(",", $retailer) . ")";
            $cat_retailers[array_pop($temp_arr)] = DB::select("SELECT retailer_id, title, slug, url, image,cashback FROM retailers WHERE $new_where ");

        }
        //$this->pr($cat_retailers);
        /*  $cashback = WhitecashbackRetailers::limit(12)->where('featured', '=', 1)
              ->where('end_date', '=', "0000-00-00 00:00:00")
              ->orWhere('end_date', '>', 'NOW()')
              ->where('status', '=', "'".'active'."'")
              ->get();*/
        $cashback = DB::select("SELECT title, slug, url, image FROM retailers WHERE featured='1' AND (end_date='0000-00-00 00:00:00' OR end_date > NOW()) AND status='active' ORDER BY RAND() LIMIT 12");
        /* echo "<pre>";
        print_r($cashback);exit;*/
        return view('users.registration', ['categories' => $categories, "cashbacks" => $cashback, "retailers" => $cat_retailers]);

    }

    public function postRegistration(Request $request)
    {

        if ($request->isMethod('post')) {
            $agree = $request['terms'];
            if($agree){
            $code = $request->input('CaptchaCode');
            $isHuman = captcha_validate($code);
            // print_r($request->all());exit;
            /* dd(Config::get('mail'));*/
            if ($isHuman) {
                $rules = [
                    'username' => 'required',
                    'email' => 'required|email|unique:users',
                    'password' => 'required|confirmed'
                ];
                $input = Input::only(
                    'username',
                    'email',
                    'password',
                    'password_confirmation'
                );

                $validator = Validator::make($input, $rules);

                if ($validator->fails()) {
                    return Redirect::back()
                        ->withErrors($validator) // send back all errors to the login form
                        ->withInput(Input::except('password'));

                   // return Redirect::back()->withInput()->withErrors($validator);
                }

                $confirmation_code = str_random(30);

                User::create([
                    'username' => Input::get('username'),
                    'email' => Input::get('email'),
                    //'password' => md5(sha1(Input::get('password'))),
                    'password' => md5(sha1(Input::get('password'))),
                    'activation_key' => $confirmation_code,
                    'unsubscribe_key' => $confirmation_code,
                    'status'=>'inactive'
                ]);

                \Mail::send('email.verify', array('confirmation_code' => $confirmation_code), function ($message) {
                    $message->to(Input::get('email'), Input::get('username'))
                        ->subject('Verify your email address');
                });
                return redirect()->back()->with('message', 'Sign Up Done');
            } else {
                $error=array('captcha'=>'Invalid captcha');
                return Redirect::back()
                    ->withErrors($error) ;           }

         }else{
                $error=array('terms'=>'Please agree terms conditions');
                return Redirect::back()
                    ->withErrors($error) ;           
            }
        }
    }

    public function confirm($confirmation_code)
    {
        if (!$confirmation_code) {
            throw new InvalidActivationKeyException;
        }

        $user = User::whereActivationKey($confirmation_code)->first();
        if (!$user) {
            throw new InvalidActivationKeyException;
        }

        $user->status = 'active';
        $user->unsubscribe_key = null;
        $user->status='active';
        $user->save();

        return view('users.login');

    }

    public function getLogin()
    {

        return view('users.login');

    }

    public function postLogin(Request $request,Guard $auth){

        // validate the info, create rules for the inputs
        $rules = array(
            'username'    => 'required', // make sure the email is an actual email
            'password' => 'required|min:3' // password can only be alphanumeric and has to be greater than 3 characters
        );

// run the validation rules on the inputs from the form
        $validator = Validator::make(Input::all(), $rules);

// if the validator fails, redirect back to the form
        if ($validator->fails()) {
            return Redirect::to('user_login')
                ->withErrors($validator) // send back all errors to the login form
                ->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
        } else {

            // create our user data for the authentication
            $userdata = array(
                'email'     => Input::get('username'),
                'password'  => Input::get('password'),
                'status'=>'active'
            );
            // attempt to do the login
            if (\Auth::attempt($userdata)) {
                \Auth::login(\Auth::user(), true);
             //   dd(\Auth::user());

                // validation successful!
                // redirect them to the secure section or whatever
                // return Redirect::to('secure');
                // for now we'll just echo success (even though echoing in a controller is bad)
                session()->flash('alert-success','Login Successfull');

                return Redirect::to('/');

            } else {
                session()->flash('alert-fail','User Inactive/Wrong Credentials.');
                // validation not successful, send back to form
                return Redirect::to('user_login')->with('alert-fail', 'User Inactive/Wrong Credentials.');
            }

        }
    }
    public function doLogout()
    {
        \Auth::logout(); // log the user out of our application
        return Redirect::to('user_login'); // redirect the user to the login screen
    }
  public function getMyAccount(){
      $user=\Auth::user();
      $country=(array)Country::select('name')->get()->toArray();
      $countries='';
      foreach ($country as $cntry)
          $countries[]=$cntry['name'];

      $user_data=User::where('id',$user->id)->select('username','fname','lname','email','address','address2','city','state','country','password','phone')->first();
      return view('users.user_account')->with('user_data',$user_data)->with('countries',$countries);
  }

  public function UpdateUserInfo(Request $request)
  {
      $user = \Auth::user()->id;
      if ($request->isMethod('post')) {
          $validation = Validator::make(Input::all(),
              array(

                  'username' => 'max:100',
                  'address' => 'min:3',
                  'city' => 'min:3',
                  'phone' => 'min:11',
                  'mobile' => 'min:11',
                  'email' => 'email|unique:users,email,'.$user,

              )
          ); //close validation

          if ($validation->fails()) {
              //withInput keep the users info
              return Redirect::back()->withInput()->withErrors($validation->messages());
          } else {
               User::where('id', $user)->update(Input::except(['_method', '_token']));
              session()->flash('alert-success','Profile Updated Successfully.');
              // validation not successful, send back to form
              return Redirect::back();

           }
        }
    }

    /*
     * Author: yasar
     * created at: 1-Aug-2016
     * Description:POST function to update user password
     * */
    public function UpdatePassword(){

    }

}

?>