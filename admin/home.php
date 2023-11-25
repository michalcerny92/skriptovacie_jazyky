<?php
session_start();
if(!isset($_SESSION['login'])) {
    header("Location: login.php");
}
?>
<a href="homeMenu.php">Spravovat Menu -- </a> <a href="homePhotos.php">Spravovat fotky -- </a> <a href="logout.php">Logout -- </a> <a href="../index-color.php">Back to main page</a>

