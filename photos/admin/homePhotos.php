<?php
session_start();
if(!isset($_SESSION['login'])) {
    header("Location: login.php");
}

include_once "../lib/DB.php";

use photos\Lib\DB;

$db = new DB("localhost", 3306, "root", "", "photos_cerny");

include "headerPhotos.php";

$getPhotos = $db->getAllPhotos();

if(isset($_GET['status'])) {
    if($_GET['status'] == 1) {
        echo "<br><p style='color: green'>Fotka bola vlozena korektne</p><br>";
    } elseif ($_GET['status'] == 2) {
        echo "<br><p style='color: red'>Fotka nebola vlozena korektne</p><br>";
    } elseif ($_GET['status'] == 3) {
        echo "<br><p style='color: green'>Fotka bola vymazana korektne</p><br>";
    } elseif ($_GET['status'] == 4) {
        echo "<br><p style='color: red'>Fotka nebola vymazana korektne</p><br>";
    } elseif ($_GET['status'] == 5) {
        echo "<br><p style='color: green'>Fotka bola aktualizovana korektne</p><br>";
    } elseif ($_GET['status'] == 6) {
        echo "<br><p style='color: red'>Fotka nebola aktualizovana korektne</p><br>";
    }
}

echo "<ul>";
foreach ($getPhotos as $photos) {
    echo "<li>".$photos['nazov']." 
    <a href='updatePhoto.php?idphotos=".$photos['idphotos']."'>Update</a>  
    <a href='deletePhoto.php?idphotos=".$photos['idphotos']."'>Delete</a>
    </li>";
}
echo "</ul>";
?>