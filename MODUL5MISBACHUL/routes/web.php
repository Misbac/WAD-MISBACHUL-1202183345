<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
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
    return view('welcome');
});
Route::get('/home', function () {
    return view('modul5.home');
});
Route::get('/product', function () {
    return view('modul5.product');
});
Route::get('/order', function () {
    return view('modul5.order');
});
Route::get('/history', function () {
    return view('modul5.history');
});
Route::get('/inputproduct', function () {
    return view('modul5.inputproduct');
});
Route::get('/listproduct', function () {
    return view('modul5.listproduct');
});
Route::get('/prosesorder', function () {
    return view('modul5.prosesorder');
});

Route::get('modul5.home',[PagesController::class,'home']);
Route::get('/product','PagesController@product');
Route::get('/order','PagesController@order');
Route::get('/history','PagesController@history');
Route::get('/inputproduct','PagesController@inputproduct');
Route::get('/listproduct','PagesController@listproduct');
