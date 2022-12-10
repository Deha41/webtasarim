<?php  include "navbar.php";
      
session_start();

if(isset($_SESSION["kullanici_mail"])){
    header( "location:profil.php" );
    
}



?>
<?php
if( $_GET['durum']=="ok"){
  echo '<div class="alert alert-success" role="alert">
  Kayıt Başarıyla Oluşturuldu
</div>';
}
elseif($_GET['durum']=="no"){
  echo '<div class="alert alert-danger" role="alert">
  Kayıt Başarısız
</div>';}
?>

<div class="container " align="center" id="form" style="margin-top: 8%;">
    <div class="form container bg d-flex justify-content-center  w-50 rounded mx-auto" id="formm">
        <form class="" align="center" action="islem2.php" method="POST">
            <div class="mb-4">
                <label class="form-label">Mail</label>
                <input type="text" required name="kullanici_mail" class="form-control">
            </div>
            <div class="mb-4">
                <label class="form-label">Ad Soyad</label>
                <input type="text" required name="kullanici_adsoyad" class="form-control">
            </div>
            <div class="mb-4">
                <label class="form-label">Adres</label>
                <input type="text" required name="kullanici_adres" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Şifre</label>
                <input type="password" required name="kullanici_sifre" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Telefon</label>
                <input type="text" required name="kullanici_telefon" class="form-control">
            </div>
            <button type="submit" name="ekle" class="btn btn-primary">Kayıt Ol</button>
        </form>
    </div>
</div>




<div class="container-fluid mt-5 text-center w-30 fs-4 " id="footer">
    TÜM HAKLARI GİZLİDİR
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
</script>
</body>

</html>