<?php 
 include "navbar.php";
 require_once 'baglan.php';
 $urunid=$_GET['urunid'];
 $_SESSION["urun_id"]=$_GET['urunid'];

 if(!isset($_SESSION["kullanici_mail"])){
    header( "location:profil.php" );
    
}

$sorr=$db->prepare("SELECT * FROM urunlerr WHERE urunler_id= ? ");
$sorr->execute([$urunid]);
$ciktii = $sorr->fetch(PDO::FETCH_ASSOC);


  ?>
<form action="islem3.php" method="POST">
    <div class="container d-flex justify-content-center">
        <div class="col mb-3 mt-3 d-flex justify-content-center">
            <div class="card d-flex justify-content-center" style="width: 18rem;">
                <img src='picture/urunler/<?php echo $ciktii['urun_foto'] ?>' class="card-img-top" alt="..."
                    style="border-radius:5px">
                <div class="card-body">

                    <h5 class="card-title"><?php echo $ciktii['urunler_ad'] ?></h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card content.</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">ÜRÜN İD : <?php echo $ciktii["urunler_id"] ?> </li>
                </ul>
                <div class="card-body">

                    <button type="submit" name="sepet" class="btn btn-primary">Sepete Ekle</button> </a>

                </div>
            </div>
        </div>
    </div>
</form>

<div class="container-fluid mt-5 text-center w-30 fs-4 position-absolute" id="footer">
    TÜM HAKLARI GİZLİDİR
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
</script>
</body>

</html>