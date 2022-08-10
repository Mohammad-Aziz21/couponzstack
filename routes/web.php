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

// #COUP-1 Routes
Route::get('/admin','AdminController@dashboard');
Route::get('/admin/dashboard','AdminController@dashboard');
Route::get('/admin/networks','AdminController@get_networks');
Route::get('/admin/edit_networkform/{nid}','AdminController@edit_networkform');
// #COUP-2 Routes
Route::post('/admin/edit_networkform/{nid}','AdminController@edit_network');
Route::get('/admin/add_networkform','AdminController@add_networkform');
Route::post('/admin/add_networkform','AdminController@add_network');

// #COUP-3 Routes
Route::get('/admin/stores/{nid}','AdminController@stores');
// #COUP-4 Routes
Route::get('/admin/filter_store/{nid}','AdminController@filter_store');
//#COUP-6 Routes
Route::get('/admin/offers/{nid}','AdminController@offer');
// #COUP-5 Routes
Route::get('/admin/edit_storeform/{store_id}','AdminController@edit_storeform');
Route::post('/admin/edit_storeform/{store_id}', 'AdminController@storeedit');

// COUP-7

Route::get('/login','WebsiteController@login');
Route::get('/signup','WebsiteController@signup');
Route::get('/special-events','WebsiteController@events');

// COUP-8

Route::post('/search_result','WebsiteController@search_result');




//WEBSITE ROUTES

Route::get('/','WebsiteController@home');


// #COUP-14 Routes
Route::get('/stores/','WebsiteController@all_store');
Route::get('/all-stores/{filter}','WebsiteController@store_filter');


// #COUP-13

Route::get('/category/{slug}','WebsiteController@offers_by_category');



//COUP-12
Route::get('/categories','WebsiteController@categories');
Route::get('/categories/{filter}','WebsiteController@perticularcategory');


// #COUP-10 Routes
Route::get('/stores/{store_slug}','WebsiteController@stores');


//#COUP-18 Routes

Route::get('/about','WebsiteController@about');
Route::get('/cookie-policy','WebsiteController@cookie_policy');
Route::get('/terms','WebsiteController@terms');
Route::get('/privacy','WebsiteController@privacy');
Route::get('/faq','WebsiteController@faq');
Route::get('/contact','WebsiteController@contact');
Route::get('/sitemap','WebsiteController@sitemap');

//#COUP-15 Routes

Route::get('/login','WebsiteController@login');
Route::get('/signup','WebsiteController@signup');








