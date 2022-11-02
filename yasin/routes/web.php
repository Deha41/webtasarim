<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KullaniciController;
use App\Http\Controllers\RaporController;

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

Route::get('/', function () {return view('home');});
Route::get('/tema', function () {return view('tema');});
Route::get('/refree1', function () {return view('refree');});
Route::get('/ekleform', function () {return view('uye');})->name("ekleform");
Route::get('/dosyalar', function () {return view('dosyalar');});
Route::get('/ekle', function () {return redirect('/ekleform');});
Route::get('/ekle', function () {return redirect('/ekleform');});



Route::get('/admin', function () {
    if (session("kullanicistatu")==1){
        return view('admin');
    }else{
        return view('/uye/refree');
    }
    });
Route::get('/giriss', function () {
    if (session("kullaniciad")){
        return view('uyari');
    }else{
        return view('welcome');
    }
    });
Route::post('/ekle', [KullaniciController::class, "ekle"])->name("ekle");//ekleme yapılan fonksiyon
Route::post('/giris', [KullaniciController::class, "giris"])->name("giris");
Route::get('/cikis', [KullaniciController::class, "cikis"])->name("cikis");
Route::get('/rapor-duzenle/{$maclar_id}', [KullaniciController::class, "raporduzenle"])->name("rapor-duzenle");
Route::post('/rapor-duzenle-post/{$maclar_id}', [KullaniciController::class, "raporduzenlepost"])->name("rapor-duzenle-post");


Route::prefix('uye')->group(function(){
    Route::get('/refree', function () {
        if (session("key")){
            return view('refree');
        }else{
            return redirect("/");
        }
        });
    Route::get('/match', function () {return view('match');});    
});