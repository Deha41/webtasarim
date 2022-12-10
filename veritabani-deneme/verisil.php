<?php
require_once 'baglan.php';
if($_GET["sepetid"]){
    $id=$_GET['sepetid'];
    if(!$id){
        header('location:sepet.php');
    }
    else{
        $sil=$db->prepare("DELETE FROM sepet WHERE sepet_id=?");
        $sil->execute([$id]);
        header('location:sepet.php');
    }
}
if($_GET){
    $id=$_GET['kullaniciid'];
    if(!$id){
        header('location:index.php');
    }
    else{
        $sil=$db->prepare("DELETE FROM sepet WHERE kullanici_id=?");
        $sil->execute([$id]);
        header('location:sepet.php');
    }
}


?>