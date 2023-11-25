<?php

include_once "lib/DB.php";

use photos\lib\DB;

$db = new DB("localhost", 3306, "root", "", "photos_cerny");
?>

<!-- Page 1 Gallery One -->
<li class="selected">                    
    <div class="cd-full-width">
        <div class="container-fluid js-tm-page-content" data-page-no="1" data-page-type="gallery">
            <div class="tm-img-gallery-container">
                <div class="tm-img-gallery gallery-one">
                    <!-- Gallery One pop up connected with JS code below -->
                        <?php
                            $photos = $db->getAllPhotos();
                            foreach ($photos as $item) {
                            $idphotos = $item['idphotos'];
                            $nazov = $item['nazov'];
                            $popis = $item['popis'];
                            $photo_url = $item['photo_url'];
                            $photo_url_tn = $item['photo_url_tn'];
                            echo    '<div class="grid-item">    
                                        <figure class="effect-sadie">
                                        <img src="'.$photo_url_tn.'" alt="Image" class="img-fluid tm-img">
                                        <figcaption>
                                            <h2 class="tm-figure-title"><span><strong>'.$nazov.'</strong></span></h2>
                                            <p class="tm-figure-description">'.$popis.'</p>
                                            <a href="'.$photo_url.'">View more</a>
                                        </figcaption>
                                        </figure>
                                    </div>'; 
                            }
                        ?>
                </div>                                 
            </div>
        </div>                                                    
    </div>                    
</li>
