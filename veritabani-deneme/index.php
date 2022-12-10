<?php  include "navbar.php";
require_once 'baglan.php';



$slider=$db->prepare("SELECT * FROM slider");
$slider->execute();

?>
<div class="container mt-5 mb-5">
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <?php  foreach($slider as $indeks=> $sliders ){?>
        <div class="carousel-item <?php if($indeks==0){echo "active";}?>">
            <img src="picture/slider/<?php echo $sliders["slider_foto"]?>" class="d-block w-100" alt="...">
        </div>
        <?php }?>
       
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
</div>



<div class="container justify-content-around" id="cards">
    <div class="card" style="width: 18rem;">
        <img src="picture/slider/<?php echo $sliders["slider_foto"]?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">KAMPANYALARrrrrrr</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>

        </div>
    </div>
    <div class="card" style="width: 18rem;">
        <img src="picture/slider/<?php echo $sliders["slider_foto"]?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">KAMPANYALAR</h5>
            <p class="card-text">Lorem ipsum dolor sit amet.
            </p>

        </div>
    </div>
    <div class="card" style="width: 18rem;">
        <img src="picture/slider/<?php echo $sliders["slider_foto"]?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">KAMPANYALAR</h5>
            <p class="card-text"> Quo at ratione facere et sequi deserunt, nam quisquam ipsam qui earum dolorem
                voluptate perspiciatis repudian</p>

        </div>
    </div>
</div>

<?php  include "footer.php";?>