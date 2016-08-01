<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



Route::get('/', 'HomeController@getIndex');
Route::get('/retailer/{letter?}', 'StoreController@getIndex');
Route::get('/signUp', 'UserController@getRegistration');
Route::get('/user_login', 'UserController@getLogin');
Route::post('/user_login', 'UserController@postLogin');
Route::get('logout','HomeController@doLogout');
Route::get('/get_coupons', array('uses' => 'HomeController@getCoupons'));
Route::get('view-retailer/{retailers}', 'HomeController@getViewRetailer');
Route::get('/category/{cat}', 'StoreController@getIndex');
Route::get('/coupons/get_search_coupons', 'StoreController@getSearchCoupons');
Route::get('/myaccount', 'UserController@getMyAccount');
Route::post('/updateUserInfo', 'UserController@UpdateUserInfo');
Route::post('/updatePassword', 'UserController@UpdatePassword');





Route::post('/registration', 'UserController@postRegistration');

Route::controller('home','HomeController');

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('register/verify/{confirmationCode}', [
    'as' => 'confirmation_path',
    'uses' => 'UserController@confirm'
]);



Blade::extend(function($value) {
    return preg_replace('/\@var(.+)/', '<?php ${1}; ?>', $value);
});


/*
   * Created At: 29-July-2016
   *Author: Amit
   *Description:Admin Routes
  */

Route::group(array('namespace'=>'Admin'), function()
{
    Route::get('/admin',  'LoginController@login');
    Route::post('/admin','LoginController@postLogin');
    Route::get('/admin/logout','LoginController@logout');
    Route::get('/admin/password/reset','LoginController@reset');
    Route::get('/admin/dashboard',array('uses'=>'LoginController@dashboard'));
    Route::get('/admin/retailers',array('uses'=>'RetailerController@index'));
    Route::get('/admin/view/retailers/{id}',array('uses'=>'RetailerController@view'));
    Route::get('/admin/retailers/add','RetailerController@add');

    Route::get('/admin/website',array('uses'=>'WebsiteController@index'));


    Route::get('/admin/reviews',array('uses'=>'ReviewsController@index'));
    Route::get('/admin/pages',array('uses'=>'PagesController@index'));
    Route::get('/admin/templates',array('uses'=>'TemplatesController@index'));
    Route::get('/admin/sendmail',array('uses'=>'LoginController@sendmail'));
    Route::get('/admin/network',array('uses'=>'NetworkController@index'));



});