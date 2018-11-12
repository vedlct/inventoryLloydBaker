<?php

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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::view('/','login');
Route::view('/main','main')->name('main');
Route::view('/form','form')->name('form');
Route::view('/datatable','datatable')->name('datatable');
Route::view('/onlyDatatable','onlyDatatable')->name('only.datatable');


Route::view('/Main-Screen','mainscreen')->name('mainsreen');


//Goods In
Route::view('/goods-in','goods-in.add')->name('goods-in.add');

Route::view('/stock/out','stock.out')->name('stock.out');
Route::view('/stock/out/add','stock.add')->name('stock.out.add');

Route::view('/settings/product-category','settings.productCategory')->name('settings.productCategory');
Route::view('/settings/product-category/add','settings.addProductCategory')->name('settings.productCategory.add');

Route::view('/settings/location','settings.location')->name('settings.location');
Route::view('/settings/location/add','settings.addLocation')->name('settings.location.add');


Route::view('/settings/color','settings.color')->name('settings.color');
Route::view('/settings/color/add','settings.addColor')->name('settings.color.add');

Route::view('/settings/size','settings.size')->name('settings.size');
Route::view('/settings/size/add','settings.addSize')->name('settings.size.add');

Route::view('/settings/brand','settings.brand')->name('settings.brand');
Route::view('/settings/brand/add','settings.addBrand')->name('settings.brand.add');

Route::view('/settings/style','settings.style')->name('settings.style');
Route::view('/settings/style/add','settings.addStyle')->name('settings.style.add');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
