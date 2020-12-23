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

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

//Route::get('/', 'HomeController@index')->name('home');


// Route::get('/addproduct', function (){
//     return view('registerproduct');
// });
// Route::post('/addproduct', 'ProductController@addProduct');
// Route::post('/addsale', 'SalesController@addSale');
// Route::get('/products', function (){
//     return view('products');
// });
// Route::get('/addsales', function (){
//     return view('registersales');
// });
// Route::get('/sales', function (){
//     return view('sales');
// });

// Route::get('/report', function (){
//      return response()->file('reports/report.pdf');
// });

 Route::get('/', 'HomeController@index')->name('homepage');
    Route::get('pricing', 'HomeController@pricing')->name('pricing');
    Route::get('contact', 'HomeController@contact')->name('contact');
    Route::post('contact', 'HomeController@handle_email_query')->name('handle_email_query');
    Route::get('instant-quote', 'OrderController@quote')->name('instant_quote');
    Route::get('faq', 'HomeController@content')->name('faq');
    Route::get('how-it-works', 'HomeController@content')->name('how_it_works');
    Route::get('privacy-policy', 'HomeController@content')->name('privacy_policy');
    Route::get('revision-policy', 'HomeController@content')->name('revision_policy');
    Route::get('disclaimer', 'HomeController@content')->name('disclaimer');
    Route::get('terms-and-conditions', 'HomeController@content')->name('terms_and_conditions');
    Route::get('money-back-guarantee', 'HomeController@content')->name('money_back_guarantee');

    Route::get('sitemap.xml', 'SitemapController@index')->name('sitemap.xml');
    Route::get('page-sitemap.xml', 'SitemapController@page')->name('page-sitemap.xml');
