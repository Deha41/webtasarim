<?php  include "navbar.php";
require_once 'baglan.php';

if(!isset($_SESSION["kullanici_mail"])){
    header( "location:profil.php" );
    
}
$sorgu=$db->prepare("SELECT * FROM urunlerr");
$sorgu->execute();
var_dump($sorgu);
if($sorgu->rowCount()){
?>

<div class="container">
    <div class="row row-cols-1 row-cols-md-2 row-cols-sm-1 row-cols-lg-4 text-center">
        <?php
    foreach($sorgu as $sorgular){
      ?>
        <div class="col mb-3 mt-3">

            <div class="card" style=" display:flex;">
                <img src='picture/urunler/<?php echo $sorgular['urun_foto'] ?>' class="card-img-top" alt="..."
                    style="border-radius:5px">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $sorgular['urunler_ad'] ?></h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card content.</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">ÜRÜN İD : <?php echo $sorgular['urunler_id'] ?></li>
                </ul>
                <div class="card-body">
                    <?php $_SESSION["urun"]=$sorgular['urunler_id']; ?>
                    <a href="<?php echo"urunlerr.php?urunid=".$sorgular['urunler_id'];?>" class="nav-link"> <button
                            type="button" class="btn btn-primary">Ürün Detay</button> </a>
                </div>
            </div>
        </div>
        <?php
        
    }
}
?>
    </div>
</div>



<?php  include "footer.php";?>