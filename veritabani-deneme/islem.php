<?php 

require_once 'baglan.php';

if(isset($_POST['ekle'])){
    $kaydet=$db->prepare("INSERT into  kullanicilarr set
    
    kullanici_adsoyad=:kullanici_adsoyad,
    kullanici_telefon=:kullanici_telefon,
    kullanici_adres=:kullanici_adres,
    kullanici_mail=:kullanici_mail,
    kullanici_sifre=:kullanici_sifre
    ");
    $insert=$kaydet->execute(array(
        'kullanici_adsoyad'=>$_POST['kullanici_adsoyad'],
        'kullanici_telefon'=>$_POST['kullanici_telefon'],
        'kullanici_adres'=>$_POST['kullanici_adres'],
        'kullanici_mail'=>$_POST['kullanici_mail'],
        'kullanici_sifre'=>$_POST['kullanici_sifre'],
    ));
    header( "location:kayıtol.php?durum=ok" );
    
    
}
else{header( "location:kayıtol.php?durum=no" );}



if(isset($_POST['cikis'])){
    session_destroy();
    header( "location:index.php" );

}
if(isset($_POST['sepet'])){
    $kaydet=$db->prepare("INSERT into  sepet set
    
    kullanici_id=:kullanici_id,
    urun_id=:urun_id,
    
   
    ");
    $insert=$kaydet->execute(array(
        'kullanici_id'=>$_POST['kullanici_id'],
        'urun_id'=>$ciktii["urunler_id"],
        
       
    ));
    header( "location:urunler.php?durum=ok" );
    
    
}
else{header( "location:urunler.php?durum=no" );}

if(isset($_POST['giris'])){
    $mail=$_POST["mail"];
    $sifre=$_POST["sifre"];


    $sor=$db->prepare('SELECT * FROM kullanicilarr WHERE kullanici_mail= ? and kullanici_sifre= ?');
    $sor->execute([
        $mail,$sifre

    ]);
     $say=$sor->rowCount();
    $cikti = $sor->fetch(PDO::FETCH_ASSOC);
    if($say==1){
        $_SESSION["kullanici_adsoyad"]=$cikti["kullanici_adsoyad"];
        $_SESSION["kullanici_mail"]=$cikti["kullanici_mail"];
        $_SESSION["kullanici_telefon"]=$cikti["kullanici_telefon"];
        $_SESSION["kullanici_adres"]=$cikti["kullanici_adres"];
        $_SESSION["login"]=1;
        $_SESSION["kullanici"]=$cikti["kullanici_id"];
        $_SESSION["kullanicistatu"]=$cikti["kullanici_statu"];


        if($cikti["kullanici_statu"]==1){
            header( "location:profil.php" );
        }
        else{
            header( "location:admin/index.php" );
        }
    }
    else{
        header( "location:form.php?durum=no" );

    }


}











?>