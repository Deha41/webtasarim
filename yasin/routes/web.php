<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Ornek;
use App\Http\Controllers\Iletisim;




Route::get('/', function () {
    return view('welcome');
});

Route::get('/denemeee',function(){return view("deneme");});
Route::get('/referee',function(){return view("refree");});
Route::get('/form',[Iletisim::class,'index']);
Route::post('/form-sonuc',[Iletisim::class,'ekleme'])->name("iletisim-sonuc");
Route::get('/giris',function(){return view("welcome");});
Route::get('/insert',function(){
    DB::insert('insert into uzers (ad,soyad,sifre,mail) values (?,?,?,?)',['kullaniciadikayit','kovalık','123456','merhabagmail']);
});


