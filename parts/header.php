<?php

include_once "lib/DB.php";

use photos\lib\DB;

$db = new DB("localhost", 3306, "root", "", "photos_cerny");
?>
<!-- <header class="container main-header"> -->
    <!-- Content -->
    <div class="cd-hero">

<!-- Navigation -->        
<div class="cd-slider-nav">
    <nav class="navbar">
        <div class="tm-navbar-bg">
            <a class="navbar-brand text-uppercase" href="#"><i class="fa fa-picture-o tm-brand-icon"></i>Photos_Cerny</a>
            <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#tmNavbar">
                &#9776;
            </button>
            <div class="collapse navbar-toggleable-md text-xs-center text-uppercase tm-navbar" id="tmNavbar">
                <ul class="nav navbar-nav">
                <?php
                    $menu = $db->getMenuItems();
                    foreach ($menu as $item) {
                        $menu_item = $item['menu_item'];
                        $url = $item['url'];
                        $data_type = $item['data_type'];
                        echo '<li class="nav-item"><a class="nav-link" href="'.$url.'" data-no="'.$data_type.'">'.$menu_item.'</a></li>';
                    }
                ?>
                <a href="admin/login.php">login</a>
                </ul>
            </div>                        
        </div>
    </nav>
</div> 
<!-- </header> -->