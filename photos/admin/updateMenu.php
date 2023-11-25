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
    $udpate = $db->updateMenuItem($_POST['idmenu'], $_POST['menu_item'], $_POST['url'], $_POST['data_type']);

    if($udpate) {
        header("Location: homeMenu.php?status=5");
    } else {
        header("Location: homeMenu.php?status=6");
    }
} else {
    if(isset($_GET['idmenu'])) {
        $menuItem = $db->getMenuItem($_GET['idmenu']);
?>
<br><br>
<form action="" method="post">
    <input type="text" name="menu_item" value="<?php echo $menuItem['menu_item']; ?>" placeholder="Menu item"><br>
    <input type="text" name="url" value="<?php echo $menuItem['url']; ?>" placeholder="Page url"><br>
    <input type="text" name="data_type" value="<?php echo $menuItem['data_type']; ?>" placeholder="Data type"><br>
    <input type="hidden" name="idmenu" value="<?php echo $menuItem['idmenu']; ?>">
    <input type="submit" name="submit" value="Aktualizovat">
</form>
<?php
    }
}
?>
