<?php
include_once("dosyalar/baglan.php");
if($_GET["kullaniciid"]){
    $id=$_GET['kullaniciid'];
    if(!$id){
        header('location:index.php');
    }
    else{
        $sil=$db->prepare("DELETE FROM kullanicilarr WHERE kullanici_id=?");
        $sil->execute([$id]);
        header('location:index.php');
    }
}







?>