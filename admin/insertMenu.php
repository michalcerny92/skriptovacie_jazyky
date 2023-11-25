<?php
session_start();
if(!isset($_SESSION['login'])) {
    header("Location: login.php");
}

include_once "../lib/DB.php";

use photos\Lib\DB;

$db = new DB("localhost", 3306, "root", "", "photos_cerny");
include "headerMenu.php";

if(isset($_POST['submit'])) {
    $insert = $db->insertMenuItem($_POST['menu_item'], $_POST['url'], $_POST['data_type']);

    if($insert) {
        header("Location: homeMenu.php?status=1");
    } else {
        header("Location: homeMenu.php?status=2");
    }
} else {
    ?>
    <br><br>
<form action="" method="post">
    <input type="text" name="menu_item" value="" placeholder="menu_item"><br>
    <input type="text" name="url" value="" placeholder="url"><br>
    <input type="text" name="data_type" value="" placeholder="data_type"><br>
    <input type="submit" name="submit" value="Vlozit">
</form>
<?php
}
?>



