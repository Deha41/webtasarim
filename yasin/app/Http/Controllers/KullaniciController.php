<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kullanici;

class KullaniciController extends Controller
{
    //db ye kaydetme
   public function ekle(Request $istek){
       kullanici::create([
           "kullaniciad"=>$istek->kullaniciadi,
           "kullanicisoyad"=>$istek->kullanicisoyad,
           "kullanicisifre"=>$istek->sifre,
           "kullanicimail"=>$istek->mail,
           "kullanicitelefon"=>$istek->telefon,
           "kullanicimeslek"=>$istek->meslek,
           "kullaniciclasman"=>$istek->cars,
           

       ]);  

   }
   //giriş kontrol
   public function giris(Request $istek){
    $kullanici = kullanici::where('kullaniciad', $istek->kadi)->where('kullanicisifre', $istek->sifre)->get();
    if(sizeof($kullanici)==1){
        session(["kullaniciad" => $kullanici->first()->kullaniciad]);
        session(["kullanicisoyad" => $kullanici->first()->kullanicisoyad]);
        session(["kullanicimail" => $kullanici->first()->kullanicimail]);
        session(["kullanicitelefon" => $kullanici->first()->kullanicitelefon]);
        session(["kullaniciclasman" => $kullanici->first()->kullaniciclasman]);    
        return redirect("/uye/refree");   
    }
    

   }
   public function cikis(){
    session()->flush();
}
}
