
<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('frontend.index');
});
Route::post('/savepost','ContactController@savepost');
Route::get('/contact','ContactController@contact');
Route::get('/blog','BlogController@blog');
Route::get('/about','AboutController@about');
Route::get('/womenglasses','WomenGlassesController@womenglasses');
Route::get('/menglasses','MenGlassesController@menglasses');
Route::get('/womenglassesdetails','WomenGlassesDetailsController@womenglassesdetails');
Route::get('/menglassesdetails','MenGlassesDetailsController@menglassesdetails');
Route::get('/sunglasses','SunGlassesController@sunglasses');


// Admin Routes
Route::get('admin','AdminController@index')->name('admin_login');
Route::post('admin/login','AdminController@adminlogin');
Route::get('admin/dashboard','AdminController@dashboard');
Route::get('admin/adduser','AdminController@addUser');
Route::post('admin/addnewuser','AdminController@addNewUser');
Route::get('admin/edituser/{id}','AdminController@editUser');
Route::post('admin/updateuser/{id}','AdminController@updateUser');
Route::get('admin/deleteuser/{id}','AdminController@deleteuser');
Route::get('admin/user','AdminController@users')->name('list_users');


Route::get('admin/product_listings','ProductsController@productListing')->name('product_listings');
Route::get('admin/newproduct','ProductsController@newproduct')->name('newproduct');
Route::post('admin/postproduct','ProductsController@addproperty')->name('save_product');
Route::get('admin/edit_product/{id}','ProductsController@editProduct')->name('edit_product');
Route::post('admin/update_product/{id}','ProductsController@updateproduct')->name('update_product');
Route::get('admin/delete_product/{id}','ProductsController@deleteProduct')->name('delete_product');

