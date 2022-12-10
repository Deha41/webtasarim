<?php  include "navbar.php";
require_once 'baglan.php';
if(!isset($_SESSION["kullanici_mail"])){
  header( "location:profil.php" );

}
$kullaniciid=$_SESSION["kullanici"];
$siparis=$db->prepare("SELECT * FROM siparis WHERE kullanici_id=?");
$siparis->execute([$kullaniciid]);


?>

<div class="container d-flex justify-content-center">
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">SİPARİS İD</th>
                <th scope="col">ÜRÜN ADI</th>
                <th scope="col">Ürün Adet</th>
                
            </tr>
        </thead>
        <?php



  if($siparis){
    $i=0;
    foreach($siparis as $siparisler){
      $i++; 

    ?>

        <tbody>

            <tr>
                <th scope="row"><?php echo $i ?></th>
                <td><?php echo $siparisler["siparis_id"] ?></td>

                <td><?php echo $siparisler["sip_status"] ?></td>

                <td><?php echo $siparisler["kullanici_id"] ?></td>
                

            </tr>

        </tbody>
        <?php
        
    }
}

?>

    </table>




<div class="container-fluid mt-5 text-center w-30 fs-4 position-absolute" id="footer">
    TÜM HAKLARI GİZLİDİR
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    
</script>
</body>

</html>