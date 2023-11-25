<?php
session_start();
if(!isset($_SESSION['login'])) {
    header("Location: login.php");
}

include_once "../lib/DB.php";

use photos\Lib\DB;

$db = new DB("localhost", 3306, "root", "", "photos_cerny");

if(isset($_GET['idmenu'])) {
    $deleteMenuItem = $db->deleteMenuItem($_GET['idmenu']);

    if($deleteMenuItem) {
        header("Location: homeMenu.php?status=3");
    } else {
        header("Location: homeMenu.php?status=4");
    }
} else {
    header("Location: homeMenu.php");
}