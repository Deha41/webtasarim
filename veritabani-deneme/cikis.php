<?php 

session_start();
    session_destroy();
    // çıkış yap index sayfasına yeniden yönlendir.
    header("Location: index.php");
   


?>