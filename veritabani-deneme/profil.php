<?php  include "navbar.php";

session_start();
if(!isset($_SESSION["kullanici_mail"])){
    header( "location:kayıtol.php" );
    
}

?>

<div class="container position-absolute top-50 start-50 translate-middle d-flex justify-content-center">
    <div class="card" style="width: 18rem;">
        <ul class="list-group list-group-flush">
            <li class="list-group-item text-center fw-bold">Ad Soyad</li>
            <li class="list-group-item text-center"><?php echo $_SESSION['kullanici_adsoyad']; ?></li>
            <li class="list-group-item text-center fw-bold">Adres</li>
            <li class="list-group-item text-center"><?php echo $_SESSION['kullanici_adres']; ?></li>
            <li class="list-group-item text-center fw-bold">Telefon</li>
            <li class="list-group-item text-center"><?php echo $_SESSION["kullanici_telefon"]; ?></li>
            <li class="list-group-item text-center fw-bold">Mail</li>
            <li class="list-group-item text-center"><?php echo $_SESSION['kullanici_mail']; ?></li>
        </ul>
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