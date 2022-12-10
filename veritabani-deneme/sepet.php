<?php  include "navbar.php";
require_once 'baglan.php';
if(!isset($_SESSION["kullanici_mail"])){
  header( "location:profil.php" );

}

$kullaniciid=$_SESSION["kullanici"];

$sepet=$db->prepare("SELECT * FROM `sepet` INNER JOIN urunlerr ON sepet.urun_id=urunlerr.urunler_id INNER JOIN kullanicilarr ON
sepet.kullanici_id=kullanicilarr.kullanici_id
WHERE sepet.kullanici_id=?");
$sepet->execute([$kullaniciid]);
$sepett = $sepet->fetchAll(PDO::FETCH_ASSOC);

if(isset($_GET["durum"])){
  if($sepett){
    foreach($sepett as $cikti){
      $db->query("insert into siparis(kullanici_id,urun_id) values ('".$_SESSION["kullanici"]."','".$cikti["urunler_id"]."')");
    }
    $sil=$db->prepare("DELETE FROM sepet WHERE kullanici_id=?");
    $sil->execute([$kullaniciid]);
    header('location:sepet.php');

  }
  
    header( "location:sepet.php" );
    
    
}


if(!isset($_SESSION["kullanici_mail"])){
    header( "location:profil.php" );
    
}

?>
<div class="container d-flex justify-content-center">
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">ÜRÜN FOTOĞRAF</th>
                <th scope="col">ÜRÜN ADI</th>
                <th scope="col">Ürün Adet</th>
                <th scope="col">İşlemler</th>
            </tr>
        </thead>
        <?php



  if($sepett){
    $i=0;
    foreach($sepett as $cikti){
      $i++; 

    ?>

        <tbody>

            <tr>
                <th scope="row"><?php echo $i ?></th>
                <td><img src='picture/urunler/<?php echo $cikti["urun_foto"] ?>' class="card-img-top" alt="..."
                        style="width: 4rem; height:6rem;"></td>

                <td><?php echo $cikti["urunler_ad"] ?></td>

                <td><?php echo $cikti["urun_adet"] ?></td>
                <td><a href="../<?php echo"verisil.php?sepetid=".$cikti['sepet_id'];?>" class="nav-link"> <button
                            type="button" class="btn btn-danger">ÜRÜN SİL</button> </a></td>


            </tr>

        </tbody>
        <?php
        
    }

?>

    </table>

</div>
<div class="container d-flex justify-content-center">
    <td><a href="sepet.php?durum=odeme" class="nav-link"> <button type="button" class="btn btn-success">SEPETİ
                ONAYLA</button> </a></td>
</div>
<?php
}
?>
<div class="container-fluid mt-5 text-center w-30 fs-4 position-absolute" id="footer">
    TÜM HAKLARI GİZLİDİR
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    
</script>
</body>

</html>