<?php  include "navbar.php";
session_start();
if(isset($_SESSION["kullanici_mail"])){
    header( "location:profil.php" );
    
}?>
<?php
if( $_GET['durum']=="no"){
  echo '<div class="alert alert-danger" role="alert">
  GİRİŞ Başarısız
</div>';


}

?>
<div class="container " align="center" id="formmm" style="margin-top: 12%;">
    <div class="container bg d-flex justify-content-center  w-50 rounded mx-auto" id="formm">
        <form class="" align="center" action="islem.php" method="POST">
            <div class="mb-4">
                <label class="form-label">Mail</label>
                <input type="email" class="form-control" name="mail">
            </div>
            <div class="mb-3">
                <label class="form-label">Şifre</label>
                <input type="password" class="form-control" name="sifre">
            </div>

            <button type="submit" name="giris" class="btn btn-primary">Giriş</button>
        </form>
    </div>
</div>

<div class="container-fluid mt-5 text-center w-30 fs-4 " id="footer" style="position: absolute;">
    TÜM HAKLARI GİZLİDİR
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
</script>
</body>

</html>