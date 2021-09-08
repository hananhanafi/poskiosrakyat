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
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

Route::get('/', function () {
    // return view('auth.register');
    return view('auth.login');
    // return view('welcome');
})->name('root.url');

Auth::routes();
// RETAILER
Route::get('/login/retailer', [LoginController::class, 'showRetailerLoginForm']);
Route::get('/register/retailer', [RegisterController::class, 'showRetailerRegisterForm']);
Route::post('/login/retailer', [LoginController::class, 'retailerLogin']);
Route::post('/register/retailer', [RegisterController::class, 'createRetailer']);
Route::get('/login-otp', [LoginController::class, 'loginOtp']);
Route::get('/login-otp-verif', [LoginController::class, 'loginOtpVerif']);

// RETAILER OPERATOR
Route::get('/login/retailer_operator', [LoginController::class, 'showRetailerOperatorLoginForm']);
Route::post('/login/retailer_operator', [LoginController::class, 'retailerOperatorLogin']);

Route::get('logout', [LoginController::class, 'logout']);

Route::group(['middleware' => 'auth:retailer,retailer_operator'], function () {
    Route::resource('dashboard', 'DashboardController');

    // Route::resource('detail_transaksi', 'DetailTransaksiController');
    Route::resource('report', 'ReportController');
    // Route::resource('report_transaksi', 'Report_transaksiController');

    //Produk
    Route::resource('product', 'ProductController');
    Route::get('product/{id_retailer_produk}/stock', 'ProductController@showStock')->name('product.stock.show');
    Route::post('product/{id_retailer_produk}/stock', 'ProductController@addStock')->name('product.stock.add');
    Route::post('/produk/{id_retailer_produk}/stock/{id_retailer_produk_stok}/update', 'ProductController@updateStock')->name('product.stock.update');
    // Route::get('/edit', '\App\Http\Controllers\ProductController@edit');

    // TRANSAKSI
    Route::resource('transaksi', 'TransaksiController');
    Route::get('transaksi/print/{id}', 'TransaksiController@print');

    Route::post('/cari', 'TransaksiController@loadData');
    Route::post('/addCart', 'TransaksiController@addCart');
    Route::get('/getCart', 'TransaksiController@getCart');
    Route::post('/updateCart', 'TransaksiController@updateCart');
    Route::get('/deleteCart/{id}', 'TransaksiController@deleteCart');
    Route::post('/bayar', 'TransaksiController@bayar')->name('transaksi.bayar');
    Route::get('/batal', 'TransaksiController@batal')->name('transaksi.batal');
});

Route::group(['middleware' => 'auth:retailer'], function () {
    // USER OPERATOR
    Route::group(['prefix' => 'operator'], function () {
        Route::get('/', '\App\Http\Controllers\OperatorController@index');
        Route::get('/show/{id}', '\App\Http\Controllers\OperatorController@show');
        Route::get('/edit/{id}', '\App\Http\Controllers\OperatorController@edit');
        Route::post('/update', '\App\Http\Controllers\OperatorController@update');
        Route::post('/update/password', '\App\Http\Controllers\OperatorController@update_password');
        Route::get('/create', '\App\Http\Controllers\OperatorController@create');
        Route::post('/store', '\App\Http\Controllers\OperatorController@store');
        Route::post('/hapus/{id}', '\App\Http\Controllers\OperatorController@destroy');
    });

    Route::get('/profile/retailer', 'ProfileController@index');
    Route::post('/profile/retailer/update', 'ProfileController@update');
    Route::post('/profile/retailer/update/toko', 'ProfileController@update_toko');
    Route::post('/profile/retailer/update/password', 'ProfileController@update_password');
});

Route::group(['middleware' => 'auth:retailer_operator'], function () {
    Route::get('/profile/retailer_operator', 'ProfileKasirController@index');
    Route::post('/profile/retailer_operator/update', 'ProfileKasirController@update');
    Route::post('/profile/retailer_operator/update/password', 'ProfileKasirController@update_password');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//Struk
// Route::get('/struk', function () {
// 	return view('invoice.struk');
// });

//print struk
Route::get('/printStruk', function () {
    return view('invoice.printInvoice');
});
