<?php
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);
if(isset($_SESSION["kullanici_mail"] ) && $_SESSION["kullanicistatu"]==1){
     header( "location:../profil.php" );
   
   }

try {
     $db = new PDO("mysql:host=localhost;dbname=organizasyon;charset=utf8","root","");
} catch ( PDOException $e ){
     print $e->getMessage();
}
session_start();
?>