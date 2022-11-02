<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kullanici;
use App\Models\maclar;

class KullaniciController extends Controller
{
    //db ye kaydetme
   public function ekle(Request $istek){
       $istek->validate([
        'kullaniciadi'=>'required',
        'kullanicisoyad'=>'required',
        'meslek'=>'required',
        'mail'=>'required|email:rcf,dns',
       ]);
  
        kullanici::create([
            "kullaniciad"=>$istek->kullaniciadi,
            "kullanicisoyad"=>$istek->kullanicisoyad,
            "kullanicisifre"=>$istek->sifre,
            "kullanicimail"=>$istek->mail,
            "kullanicitelefon"=>$istek->telefon,
            "kullanicimeslek"=>$istek->meslek,
            "kullaniciclasman"=>$istek->cars,
            

        ]);
          
        return redirect("/ekleform");
 
    
   
   }
   //giriş kontrol
   public function giris(Request $istek){
    $kullanici = kullanici::where('kullaniciad', $istek->kadi)->where('kullanicisifre', $istek->sifre)->get();
    if(sizeof($kullanici)==1){
        session(["kullaniciid" => $kullanici->first()->kullaniciid]);
        session(["kullanicistatu" => $kullanici->first()->kullanicistatu]);
        session(['key' => 1]);
            if (session("kullanicistatu")==1){
                return redirect('/admin');
            }else{
                return redirect("/uye/refree");
            }
            
        return redirect("/uye/refree");   
    }
 
    else{
        return redirect("/giriss");
    }
    

   }
   public function cikis(){
    session()->flush();
    return redirect("/giriss"); 
}
    public function raporduzenle($maclar_id){
        $raporduzenle=maclar::whereId($maclar_id)->first();
        if($raporduzenle){
            return view("rapor-duzenle",compact('raporduzenle'));
        }
        else{
            return redirect()->route("uye/refree");
        }
        

            
    }
    public function raporduzenlepost(Request $istek,$maclar_id){

    }
}
