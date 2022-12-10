<?php
include_once("dosyalar/navbar.php");
include_once("dosyalar/baglan.php");

?>

<div class="container">
    <form method="post" action="islem.php">
        <div class="form-group">
            <label for="exampleInputEmail1">Mail</label>
            <input type="text" required name="kullanici_mail" class="form-control">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Ad Soyad</label>
            <input type="text" required name="kullanici_adsoyad" class="form-control">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Adres</label>
            <input type="text" required name="kullanici_adres" class="form-control">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Şifre</label>
            <input type="password" required name="kullanici_sifre" class="form-control">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Telefon</label>
            <input type="text" required name="kullanici_telefon" class="form-control">
        </div>

        <button type="submit" name="ekle" class="btn btn-primary mb-5">Kayıt Ol</button>
    </form>


</div>

<?php
include_once("dosyalar/menu.php");
include_once("dosyalar/footer.php");

?>