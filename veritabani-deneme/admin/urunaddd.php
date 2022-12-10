<?php

include_once("dosyalar/baglan.php");

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if(isset($_POST["guncelle"])){
    

    $uploads_dir = '../picture/urunler';
        
    $tmp_name = $_FILES["fotoduzenle"]["tmp_name"];
    $name = $_FILES["fotoduzenle"]["name"];
    $sayi=rand(20000,32000);
    $resimad=$sayi.$name;
    var_dump(move_uploaded_file($tmp_name, "$uploads_dir/$resimad"));
    echo $resimad;


    $kaydet=$db->prepare("INSERT into  urunlerr set
    
    urunler_ad=:urunler_ad,
    urunler_adet=:urunler_adet,
    urun_foto=:urun_foto
    ");
    $insert=$kaydet->execute(array(
        'urunler_ad'=>$_POST['urunad'],
        'urunler_adet'=>$_POST['urunadet'],
        'urun_foto'=>$resimad,
        
    ));
    header("location:urunadd.php");
    
    

    }
?>