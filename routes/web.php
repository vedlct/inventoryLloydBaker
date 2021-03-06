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
//Route::view('/','login')->name('/');
Route::get('/','Auth\LoginController@getLoginForm')->name('/');

Route::view('/main','main')->name('main');
Route::view('/form','form')->name('form');
Route::view('/datatable','datatable')->name('datatable');
Route::view('/onlyDatatable','onlyDatatable')->name('only.datatable');

//====================================Dashboard=================================================

Route::get('/dashboard','DashboardController@index')->name('mainsreen');

//====================================Report=================================================
Route::get('profit/profitCalculation','ReportController@productCalculation')->name('profit.profitCalculation');
Route::get('profit/MostProfitableProduct','ReportController@mostProfitableProduct')->name('profit.mostProfitableProduct');
Route::get('Report/product/Sell-Information','ReportController@stockValuation')->name('report.sellData');

Route::view('Report/product/Shop','report.productperShop')->name('report.productperShop');



//Goods In

Route::view('/goods-in/Add-Bulk-Goods','goods-in.addbulk')->name('goods-in.bulk');

//=====================================Stock=====================================
Route::get('/goods-in/Show-Goods','GoodsController@index')->name('goods-in.goodsin');
Route::post('/goods-in/Show-Goods','GoodsController@getGoodsInData')->name('goods-in.getdata');
Route::post('/goods-in/insertGoodsInStock','GoodsController@insertGoodsInStock')->name('goods-in.insertGoodsInStock');
Route::post('/goods-in/insertExcel','GoodsController@insertExcel')->name('goods-in.excel');

Route::get('/stock/out','StockOutController@index')->name('stock.out');
Route::post('/stock/out','StockOutController@getdata')->name('stockout.getdata');
Route::post('/stock/out/insert/excel','StockOutController@insertExcel')->name('stock.out.excel');
//stock transfer
Route::get('/stocktransfer','StockTransferController@index')->name('stocktransfer.show');
Route::post('/stocktransfer/get','StockTransferController@getData')->name('stocktransfer.get');


Route::view('/stock/out/add','stock.add')->name('stock.out.add');



Route::view('/stocktransfer/bulk','stocktransfer.bulkinsert')->name('stocktransfer.bulk');


//=====================================Settings=====================================
Route::get('/settings/product','SettingsController@product')->name('settings.productCategory');
Route::get('/settings/product/add','SettingsController@addProduct')->name('settings.productCategory.add');
Route::get('/settings/Shop','SettingsController@shop')->name('settings.location');
Route::post('/settings/Shop','SettingsController@getAllShop')->name('settings.location.getAllShop');

// Add Shop
Route::get('/settings/Shop/add','SettingsController@addShop')->name('settings.location.add');
Route::post('/settings/Shop/add','SettingsController@insertShop')->name('settings.location.insertShop');

// Edit Shop
Route::get('/settings/Shop/Edit/{id}','SettingsController@editShop')->name('shop.edit');
Route::post('/settings/Shop/update','SettingsController@updateShop')->name('shop.update');

// Delete Shop
Route::post('/settings/Shop/delete','SettingsController@deleteShop')->name('shop.delete');

//rangeplan
Route::get('/settings/ranglePlan','SettingsController@rangePlan')->name('settings.rangePlan');
Route::post('/settings/ranglePlan/get','SettingsController@getRangePlanData')->name('settings.getRangePlanData');
Route::post('/settings/ranglePlan/insert','SettingsController@insertRangePlanData')->name('settings.insertRangePlanData');


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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
