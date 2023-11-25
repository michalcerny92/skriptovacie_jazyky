<?php
session_start();
if(!isset($_SESSION['login'])) {
    header("Location: login.php");
}

include_once "../lib/DB.php";

use photos\Lib\DB;

$db = new DB("localhost", 3306, "root", "", "photos_cerny");
include "headerPhotos.php";

if(isset($_POST['submit'])) {
    $insert = $db->insertPhoto($_POST['nazov'], $_POST['popis'], $_POST['photo_url'], $_POST['photo_url_tn']);

    if($insert) {
        header("Location: homePhotos.php?status=1");
    } else {
        header("Location: homePhotos.php?status=2");
    }
} else {
    ?>
    <br><br>
<form action="" method="post">
    <input type="text" name="nazov" value="" placeholder="nazov"><br>
    <input type="text" name="popis" value="" placeholder="popis"><br>
    <input type="text" name="photo_url" value="" placeholder="photo_url"><br>
    <input type="text" name="photo_url_tn" value="" placeholder="photo_url_tn"><br>
    <input type="submit" name="submit" value="Vlozit">
</form>
<?php
}
?>
