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
    $udpate = $db->updatePhoto($_POST['idphotos'], $_POST['nazov'], $_POST['popis'], $_POST['photo_url'], $_POST['photo_url_tn']);

    if($udpate) {
        header("Location: homePhotos.php?status=5");
    } else {
        header("Location: homePhotos.php?status=6");
    }
} else {
    if(isset($_GET['idphotos'])) {
        $photo = $db->getPhoto($_GET['idphotos']);
?>
<br><br>
<form action="" method="post">
    <input type="text" name="nazov" value="<?php echo $photo['nazov']; ?>" placeholder="Nazov"><br>
    <input type="text" name="popis" value="<?php echo $photo['popis']; ?>" placeholder="Popis"><br>
    <input type="text" name="photo_url" value="<?php echo $photo['photo_url']; ?>" placeholder="photo_url"><br>
    <input type="text" name="photo_url_tn" value="<?php echo $photo['photo_url_tn']; ?>" placeholder="photo_url_tn"><br>
    <input type="hidden" name="idphotos" value="<?php echo $photo['idphotos']; ?>">
    <input type="submit" name="submit" value="Aktualizovat">
</form>
<?php
    }
}
?>
