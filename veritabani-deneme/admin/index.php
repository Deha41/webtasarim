<?php
include_once("dosyalar/navbar.php");
include_once("dosyalar/baglan.php");




$kullanici=$db->prepare("SELECT * FROM kullanicilarr");
$kullanici->execute();



?>


<div class="container ">
  <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Kullanici Ad Soyad</th>
      <th scope="col">Kullanici Mail</th>
      <th scope="col">Kullanici Adres</th>
      <th scope="col">Kullanici Telefon</th>
      <th scope="col">İşlemler</th>
    </tr>
  </thead>
  <tbody>

<?php
if($kullanici->rowCount()){
  $i=0;
  foreach($kullanici as $kullanicilar){
    $i++;
    ?>
        
            <tr>
              <th scope="row"><?php echo $i?></th>
              <td><?php echo $kullanicilar['kullanici_adsoyad'] ?></td>
              <td><?php echo $kullanicilar['kullanici_mail'] ?></td>
              <td><?php echo $kullanicilar['kullanici_adres'] ?></td>
              <td><?php echo $kullanicilar['kullanici_telefon'] ?></td>
              
              <td class="d-inline-flex">
                <a href="<?php echo"updateuser.php?kullaniciid=".$kullanicilar['kullanici_id'];?>" class="nav-link"> <button type="button"  class="btn btn-info">DÜZENLE</button> </a>
              <a href="<?php echo"verisil.php?kullaniciid=".$kullanicilar['kullanici_id'];?>" class="nav-link"> <button type="button"  class="btn btn-danger">SİL</button> </a>
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
  

  
  