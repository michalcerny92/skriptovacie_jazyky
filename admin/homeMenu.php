<?php
session_start();
if(!isset($_SESSION['login'])) {
    header("Location: login.php");
}

include_once "../lib/DB.php";

use photos\Lib\DB;

$db = new DB("localhost", 3306, "root", "", "photos_cerny");

include "headerMenu.php";

$menuItems = $db->getMenu();

if(isset($_GET['status'])) {
    if($_GET['status'] == 1) {
        echo "<br><p style='color: green'>Menu polozka bola vlozena korektne</p><br>";
    } elseif ($_GET['status'] == 2) {
        echo "<br><p style='color: red'>Menu polozka nebola vlozena korektne</p><br>";
    } elseif ($_GET['status'] == 3) {
        echo "<br><p style='color: green'>Menu polozka bola vymazana korektne</p><br>";
    } elseif ($_GET['status'] == 4) {
        echo "<br><p style='color: red'>Menu polozka nebola vymazana korektne</p><br>";
    } elseif ($_GET['status'] == 5) {
        echo "<br><p style='color: green'>Menu polozka bola aktualizovana korektne</p><br>";
    } elseif ($_GET['status'] == 6) {
        echo "<br><p style='color: red'>Menu polozka nebola aktualizovana korektne</p><br>";
    }
}

echo "<ul>";
foreach ($menuItems as $menuItem) {
    echo "<li>".$menuItem['menu_item']." 
    <a href='updateMenu.php?idmenu=".$menuItem['idmenu']."'>Update</a>  
    <a href='deleteMenu.php?idmenu=".$menuItem['idmenu']."'>Delete</a>
    </li>";
}
echo "</ul>";
?>