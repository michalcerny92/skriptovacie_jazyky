<?php
session_start();
if(!isset($_SESSION['login'])) {
    header("Location: login.php");
}

include_once "../lib/DB.php";

use photos\Lib\DB;

$db = new DB("localhost", 3306, "root", "", "photos_cerny");

if(isset($_GET['idphotos'])) {
    $deletephoto = $db->deletePhoto($_GET['idphotos']);
    
    if($deleteMenuItem) {
        header("Location: homePhotos.php?status=3");
    } else {
        header("Location: homePhotos.php?status=4");
    }
} else {
    header("Location: homePhotos.php");
}