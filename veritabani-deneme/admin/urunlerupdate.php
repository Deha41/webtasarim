<?php
include_once("dosyalar/navbar.php");
include_once("dosyalar/baglan.php");





if($_GET["urunid"]){
    $idd=$_GET['urunid'];
    $_SESSION["urunidd"]=$idd;
    if(!$idd){
        header('location:index.php');
    }
    else{
        $urun=$db->prepare("SELECT * FROM urunlerr WHERE urunler_id=?");
        $urun->execute([$idd]);
        $urunn = $urun->fetch(PDO::FETCH_ASSOC);
       
    }
    
}

    
?>
<!-- urun text güncelleme -->
<div class="container">
    <form method="post">
        <div class="form-group">
            <label for="exampleInputEmail1">Ürün Ad</label>
            <input name="urunad" class="form-control" value="<?php echo $urunn["urunler_ad"]?>"
                placeholder="Enter email">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Ürün Adet</label>
            <input class="form-control" name="urunadet" value="<?php echo $urunn["urunler_adet"]?>"
                placeholder="Password">
        </div>

        <button type="submit" class="btn btn-primary mb-5 mt-5">Güncelle</button>

    </form>

    <!-- urun foto güncelleme -->

    <form action="urunupdatee.php" method="post" enctype="multipart/form-data">
        <div class="form-group d-flex">
            <label for="exampleInputPassword1">Ürün Foto</label>
            <img src='../picture/urunler/<?php echo $urunn["urun_foto"] ?>' name="urunfoto" class="card-img-top mt-5"
                alt="..." style="width: 20rem; height:30rem;">
        </div>

        <div class="mb-3 ">
            <label for="formFileSm" class="form-label">Resim Seçiniz</label>
            <input class="form-control " id="formFileSm" name="fotoduzenle" type="file">
        </div>

        <button type="submit" name="urunduzenle" class="btn btn-primary mb-5 mt-5">Güncelle</button>
    </form>


</div>

<?php
if($_POST){
    $urunad=$_POST["urunad"];
    $urunadet=$_POST["urunadet"];
   

    $updatee=$db->prepare("UPDATE urunlerr SET urunler_ad=?,urunler_adet=? WHERE urunler_id=?");
    $updatee->execute(array($urunad,$urunadet,$idd));
    header("Refresh:0");
    
}
include_once("dosyalar/menu.php");
include_once("dosyalar/footer.php");

?>