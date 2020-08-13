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
Route::get('admin/products', 'ProductController@productsListing')->name('products');
