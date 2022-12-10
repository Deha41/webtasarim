<?php
include_once("dosyalar/navbar.php");
include_once("dosyalar/baglan.php");

?>

<div class="container">
<form method="post" action="urunaddd.php" enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleInputEmail1">Ürün Ad</label>
    <input  name="urunad" class="form-control"    placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Ürün Adet</label>
    <input  class="form-control" name="urunadet"   placeholder="Password">
  </div>
  <div class="form-group d-flex">
    <label for="exampleInputPassword1">Ürün Foto</label>
    
  </div>
  
  <div class="form-group">
    <label for="exampleFormControlFile1">Resim Seçiniz</label>
    <input type="file" class="form-control-file" name="fotoduzenle" >
  </div>
 

  <button type="submit" class="btn btn-primary mb-5 mt-5" name="guncelle">Ekle</button>

  </form>

  <!-- urun foto güncelleme -->



<?php

include_once("dosyalar/menu.php");
include_once("dosyalar/footer.php");

?>
  