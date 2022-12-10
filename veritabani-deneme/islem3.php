<?php 
    

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once 'baglan.php';

if(isset($_POST['sepet'])){
    $kaydett=$db->prepare("INSERT into  sepet set
    kullanici_id=:kullanici_id,
    urun_id=:urun_id
    ");
    $insert=$kaydett->execute(array(
        'kullanici_id'=>$_SESSION['kullanici'],
        'urun_id'=>$_SESSION["urun_id"]
    ));
    header( "location:urunler.php?durum=ok" );
    
    
}
else{header( "location:urunler.php?durum=no" );}

?>