<?php
include_once("dosyalar/navbar.php");
include_once("dosyalar/baglan.php");


$urun=$db->prepare("SELECT * FROM urunlerr");
$urun->execute();
?>


<div class="container ">
  <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Ürün Ad</th>
      <th scope="col">Ürün Adet</th>
      <th scope="col">Ürün Foto</th>
      <th scope="col">İşlemler</th>
    </tr>
  </thead>
  <tbody>

<?php
if($urun->rowCount()){
  $i=0;
  foreach($urun as $urunler){
    $i++;
    ?>
        
            <tr>
              <th scope="row"><?php echo $i?></th>
              <td><?php echo $urunler['urunler_ad'] ?></td>
              <td><?php echo $urunler['urunler_adet'] ?></td>
              <td><img src='../picture/urunler/<?php echo $urunler["urun_foto"] ?>' class="card-img-top" alt="..." style="width: 4rem; height:6rem;"  ></td>
              <td class="d-inline-flex">
                <a href="<?php echo"urunlerupdate.php?urunid=".$urunler['urunler_id'];?>" class="nav-link"> <button type="button"  class="btn btn-info">DÜZENLE</button> </a>
              <a href="<?php echo"verisil.php?kullaniciid=".$urunler['urunler_id'];?>" class="nav-link"> <button type="button"  class="btn btn-danger">SİL</button> </a>
            </td>
            </tr>
   <?php }} ?>
   </tbody>
</table>
</div>

<?php
include_once("dosyalar/menu.php");
include_once("dosyalar/footer.php");

?>
  