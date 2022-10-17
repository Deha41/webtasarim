<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\IletisimModel;

class Iletisim extends Controller
{
    public function index(){
        return view("uye");
    }
    public function ekleme(Request $istek){

        $kullaniciadi=$istek->kullaniciadi;
        $sifre=$istek->sifre;
        $mail=$istek->mail;
        $telefon=$istek->telefon;
        $adres=$istek->adres;
        IletisimModel::create([
            "kad"=>$kullaniciadi,
            "sifre"=>$sifre,
            "mail"=>$mail,
            "telefon"=>$telefon,
            "adres"=>$adres,
        ]);
    }
}
