<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KullaniciController;

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

Route::get('/', function () {return view('welcome');});
Route::get('/form', function () {return view('uye');});
Route::get('/refree1', function () {return view('refree');});
Route::get('/ekleform', function () {return view('uye');});
Route::get('/refree1', function () {return view('refree1');});
Route::get('/doyalar', function () {return view('doyalar');});
Route::post('/ekle', [KullaniciController::class, "ekle"])->name("ekle");//ekleme yapılan fonksiyon
Route::post('/giris', [KullaniciController::class, "giris"])->name("giris");
Route::get('/cikis', [KullaniciController::class, "cikis"])->name("cikis");

Route::prefix('uye')->group(function(){
    Route::get('/refree', function () {
        if (session("kullaniciad")){
            return view('refree');
        }else{

            return redirect("/");
        }
        });
});