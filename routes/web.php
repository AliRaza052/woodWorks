
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

Route::get('admin/category','CategoryController@category');
Route::get('admin/addcategory','CategoryController@addcategory')->name('addcategory');
Route::post('admin/postcategory','CategoryController@addproductcategory')->name('postcategory');
Route::get('admin/editproductcategory/{id}','CategoryController@editproductcategory')->name('editproductcategory');
Route::post('admin/updateproductcategory/{id}','CategoryController@updateproduct')->name('updateproductcategory');
Route::get('admin/deletecat/{id}','CategoryController@deleteCategory')->name('deletecat');

Route::get('admin/product_types','ProductTypeController@index');
Route::get('admin/addtype','ProductTypeController@addType')->name('addtype');
Route::post('admin/posttype','ProductTypeController@addproductType')->name('posttype');
Route::get('admin/editproducttype/{id}','ProductTypeController@editproductType')->name('editproducttype');
Route::post('admin/updateproducttype/{id}','ProductTypeController@updateproductType')->name('updateproducttype');
Route::get('admin/deletetype/{id}','ProductTypeController@deleteType')->name('deletetype');


Route::get('admin/lenses','LensesController@index');
Route::get('admin/addlense','LensesController@addLense')->name('addlense');
Route::post('admin/postlense','LensesController@postLense')->name('postlense');
Route::get('admin/editlense/{id}','LensesController@editlens')->name('editlense');
Route::post('admin/updatelense/{id}','LensesController@updateLense')->name('updatelense');
Route::get('admin/deletelense/{id}','LensesController@deleteLense')->name('deletelense');



Route::get('admin/lensesmetrial','LensMetrialController@index');
Route::get('admin/addlensemetrial','LensMetrialController@addLense')->name('addlensemetrial');
Route::post('admin/postlensemetrial','LensMetrialController@postLense')->name('postlensemetrial');
Route::get('admin/editlense/{id}','LensMetrialController@editlens')->name('editlense');
Route::post('admin/updatelensemetrial/{id}','LensMetrialController@updateLense')->name('updatelensemetrial');
Route::get('admin/deletelense/{id}','LensMetrialController@deleteLense')->name('deletelense');

Route::get('admin/prescription','PrescriptionTypeController@index');
Route::get('admin/addprescription','PrescriptionTypeController@addLense')->name('addprescription');
Route::post('admin/postprescription','PrescriptionTypeController@postLense')->name('postprescription');
Route::get('admin/editlense/{id}','PrescriptionTypeController@editlens')->name('editlense');
Route::post('admin/updateprescription/{id}','PrescriptionTypeController@updateLense')->name('updateprescription');
Route::get('admin/deletelense/{id}','PrescriptionTypeController@deleteLense')->name('deletelense');


Route::get('admin/slider','SliderController@index');
Route::get('admin/addslider','SliderController@addSlider')->name('addslider');
Route::post('admin/postslider','SliderController@addslidertype')->name('postslider');
Route::get('admin/editproducttype/{id}','SliderController@editsliderType')->name('editproducttype');
Route::post('admin/updateslider/{id}','SliderController@updatesliderType')->name('updateslider');
Route::get('admin/deletetype/{id}','SliderController@deleteslider')->name('deletetype');
