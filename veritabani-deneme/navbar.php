<?php  ;
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="app.css" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <nav class="navbar navbar-dark navbar-expand-lg ">
        <div class="container ">
            <a href="index.php" class="navbar-brand">LOGO</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mobil">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div id="mobil" class="collapse navbar-collapse justify-content-end">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link">ANA SAYFA</a>
                    </li>
                    <li class="nav-item">
                        <a href="yaptıklarımız.php" class="nav-link">YAPTIKLARIMIZ</a>
                    </li>
                    <?php
            if($_SESSION["login"]==1){?>
                   
                    <li class="nav-item">
                        <a href="urunler.php" class="nav-link">ÜRÜNLER</a>
                    </li>

                    <li class="nav-item">
                        <div class="dropdown">
                            <button class="btn bg-warning dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <?php echo $_SESSION['kullanici_adsoyad']; ?>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="profil.php">Profilim</a></li>
                                <li><a class="dropdown-item" href="sepet.php">Sepetim</a></li>
                                <li><a class="dropdown-item" href="siparis.php">Siparişlerim</a></li>
                                <li><a class="dropdown-item" href="cikis.php" name="cikis" class="nav-link">Çıkış</a></li>
                                <?php if($_SESSION["kullanicistatu"]==2){?>
                                    <li><a class="dropdown-item" href="admin/index.php">Admin Paneli</a></li>   
                                    <?php } ?>
                            </ul>
                        </div>
                    </li>

                    <?php
            }
            else{?>
                    <li class="nav-item">
                        <a href="form.php" class="nav-link">GİRİŞ</a>
                    </li>
                    <li class="nav-item">
                        <a href="kayıtol.php" class="nav-link">KAYITOL</a>
                    </li>
                    <?php
            }
          
           ?>
                </ul>
            </div>

        </div>
    </nav>