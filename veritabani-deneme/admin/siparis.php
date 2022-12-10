<?php
include_once("dosyalar/navbar.php");
include_once("dosyalar/baglan.php");
$kullaniciid=$_SESSION["kullanici"];


$siparis=$db->prepare("SELECT * FROM `siparis` INNER JOIN urunlerr ON siparis.urun_id=urunlerr.urunler_id");
$siparis->execute();
?>


<div class="container ">
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">siparis id</th>
                <th scope="col">kullanici id</th>
                <th scope="col">Ürün Foto</th>
                <th scope="col">İşlemler</th>

            </tr>
        </thead>

        <tbody>


            <?php
if($siparis->rowCount()){
  $i=0;
  foreach($siparis as $siparisler){
    $i++;
    ?>
            <form method="POST" action="urunupdatee.php">

                <tr>
                    <th scope="row"><?php echo $i?></th>
                    <td ><input class="form-control w-50" type="text" name="siparisid"  readonly value='<?php echo $siparisler['siparis_id'] ?>' ></td>
                    <td><?php echo $siparisler['kullanici_id'] ?></td>
                    <td><img src='../picture/urunler/<?php echo $siparisler['urun_foto'] ?>' class="card-img-top"
                            alt="..." style="width: 4rem; height:6rem;"></td>
                    <td class="mt-3">

                        <select name="sip_statu" class="form-select mt-3" aria-label="Default select example">
                            <option value="Sipariş Alındı">Sipariş Alındı</option>
                            <option value="Kargoya Verildi">Kargoya Verildi</option>
                            <option value="Yola Çıktı">Yola Çıktı</option>
                            <option value="Teslim Edildi">Teslim Edildi</option>
                        </select>
                        <br class="mt-5">
                        <div class="badge bg-primary text-wrap" style="width: 7rem;">
                            <?php echo $siparisler['sip_status'] ?>
                        </div>
                        <br>
                        <button type="submit" name="guncelle" class="btn btn-info">DÜZENLE</button> </a>
            </form>
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