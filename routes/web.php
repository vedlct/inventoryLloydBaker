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
Route::view('/','login')->name('/');
Route::view('/main','main')->name('main');
Route::view('/form','form')->name('form');
Route::view('/datatable','datatable')->name('datatable');
Route::view('/onlyDatatable','onlyDatatable')->name('only.datatable');

Route::view('/Main-Screen','mainscreen')->name('mainsreen');


Route::view('profit/profitCalculation','profit.profitCalculation')->name('profit.profitCalculation');
Route::view('profit/MostProfitableProduct','profit.mostProfitableProduct')->name('profit.mostProfitableProduct');
Route::view('Report/product/Shop','report.productperShop')->name('report.productperShop');
Route::view('Report/product/Sell-Information','report.sellInformation')->name('report.sellData');

//Goods In
//Route::view('/goods-in/Add-Individual-Goods','goods-in.add')->name('goods-in.add');
Route::view('/goods-in/Add-Bulk-Goods','goods-in.addbulk')->name('goods-in.bulk');
//Route::view('/goods-in/Show-Goods','goods-in.showgoods')->name('goods-in.show');
Route::view('/goods-in/Show-Goods','goods-in.goodsin')->name('goods-in.goodsin');


Route::view('/stock/out','stock.out')->name('stock.out');
Route::view('/stock/out/add','stock.add')->name('stock.out.add');


Route::view('/stocktransfer','stocktransfer.show')->name('stocktransfer.show');
Route::view('/stocktransfer/bulk','stocktransfer.bulkinsert')->name('stocktransfer.bulk');


Route::view('/settings/product-category','settings.productCategory')->name('settings.productCategory');
Route::view('/settings/product-category/add','settings.addProductCategory')->name('settings.productCategory.add');

Route::view('/settings/Shop','settings.location')->name('settings.location');
Route::view('/settings/Shop/add','settings.addLocation')->name('settings.location.add');
Route::view('/settings/Shop/Edit','settings.EditShop')->name('settings.location.editShop');


Route::view('/settings/color','settings.color')->name('settings.color');
Route::view('/settings/color/add','settings.addColor')->name('settings.color.add');

Route::view('/settings/size','settings.size')->name('settings.size');
Route::view('/settings/size/add','settings.addSize')->name('settings.size.add');

Route::view('/settings/brand','settings.brand')->name('settings.brand');
Route::view('/settings/brand/add','settings.addBrand')->name('settings.brand.add');

Route::view('/settings/style','settings.style')->name('settings.style');
Route::view('/settings/style/add','settings.addStyle')->name('settings.style.add');

Route::view('/settings/user','settings.user')->name('settings.user');
Route::view('/settings/user/add','settings.addUser')->name('settings.user.add');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/Stock-Transfer/Range-Plan', 'HomeController@editRangePlan')->name('editRangePlan');
