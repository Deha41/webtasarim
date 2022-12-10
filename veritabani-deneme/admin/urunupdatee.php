<?php 
include_once("dosyalar/baglan.php");


if(isset($_POST["urunduzenle"])){
   
   
    $uploads_dir = '../picture/urunler';
    $tmp_name = $_FILES["fotoduzenle"]["tmp_name"];
    $name = $_FILES["fotoduzenle"]["name"];
    $sayi=rand(20000,32000);
    $resimad=$sayi.$name;
    var_dump(move_uploaded_file($tmp_name, "$uploads_dir/$resimad"));
    $id=$_SESSION["urunidd"];
    $urufotoad=$resimad;



    $updatee=$db->prepare("UPDATE urunlerr SET urun_foto=? WHERE urunler_id=?");
    $updatee->execute(array($urufotoad,$id));
    $geldigi_sayfa = $_SERVER['HTTP_REFERER']; 
        header("Refresh: 0; url=".$geldigi_sayfa."");

}

if(isset($_POST["guncelle"])){
   $siparisstatu=$_POST["sip_statu"];
   $siparisid= $_POST["siparisid"];
   echo $siparisid;
   echo $siparisstatu;
  
    
   
    $update=$db->prepare("UPDATE siparis SET sip_status=? WHERE siparis_id=?");
    $update->execute(array($siparisstatu,$siparisid));
    $geldigi_sayfa = $_SERVER['HTTP_REFERER']; 
    header("Refresh: 0; url=".$geldigi_sayfa."");
    
   
    
  }



?>