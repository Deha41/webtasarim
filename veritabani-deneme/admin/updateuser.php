<?php
include_once("dosyalar/navbar.php");
include_once("dosyalar/baglan.php");





if($_GET["kullaniciid"]){
    $id=$_GET['kullaniciid'];
    if(!$id){
        header('location:index.php');
    }
    else{
        $kullanici=$db->prepare("SELECT * FROM kullanicilarr WHERE kullanici_id=?");
        $kullanici->execute([$id]);
        $kullanicii = $kullanici->fetch(PDO::FETCH_ASSOC);
        
       
    }
}

    
?>
<div class="container">
<form method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Ad Soyad</label>
    <input  name="adsoyad" class="form-control" value="<?php echo $kullanicii["kullanici_adsoyad"]?>"   placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Mail</label>
    <input  class="form-control" name="mail" value="<?php echo $kullanicii["kullanici_mail"]?>"  placeholder="Password">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Adres</label>
    <input  class="form-control" name="adres" value="<?php echo $kullanicii["kullanici_adres"]?>"  placeholder="Password">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Telefon</label>
    <input  class="form-control" name="telefon" value="<?php echo $kullanicii["kullanici_telefon"]?>"  placeholder="Password">
  </div>
 
  <button type="submit" class="btn btn-primary mb-5 mt-5">Güncelle</button>
</form>


</div>

<?php
if($_POST){
    $adsoyad=$_POST["adsoyad"];
    $mail=$_POST["mail"];
    $adres=$_POST["adres"];
    $telefon=$_POST["telefon"];

    $update=$db->prepare("UPDATE kullanicilarr SET kullanici_adsoyad=?, kullanici_telefon=?, kullanici_mail=?, kullanici_adres=? WHERE kullanici_id=?");
    $update->execute(array($adsoyad,$telefon,$mail,$adres,$id));
    header("Refresh:0");
   
   
    


}
include_once("dosyalar/menu.php");
include_once("dosyalar/footer.php");

?>
  