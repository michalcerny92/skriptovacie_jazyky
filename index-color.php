<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Fluid Gallery HTML5 CSS3 Template</title>
<!--
Fluid Gallery Template
http://www.templatemo.com/tm-500-fluid-gallery
-->
    <!-- load stylesheets -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600">  
    <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" href="Font-Awesome-4.7/css/font-awesome.min.css">                
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/bootstrap.min.css">                                      
    <!-- Bootstrap style -->
    <link rel="stylesheet" href="css/hero-slider-style.css">                              
    <!-- Hero slider style (https://codyhouse.co/gem/hero-slider/) -->
    <link rel="stylesheet" href="css/magnific-popup.css">                                 
    <!-- Magnific popup style (http://dimsemenov.com/plugins/magnific-popup/) -->
    <link rel="stylesheet" href="css/templatemo-style.css">                                   

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
          <![endif]-->

        <!-- These two JS are loaded at the top for gray scale including the loader. -->

        <script src="js/jquery-1.11.3.min.js"></script>
        <!-- jQuery (https://jquery.com/download/) -->

        <script>
		
            var tm_gray_site = false;
            
            if(tm_gray_site) {
                $('html').addClass('gray');
            }
            else {
                $('html').removeClass('gray');   
            }
        </script>
</head>

    <body>
        
    <?php
        include_once "parts/header.php";
    ?>

            <ul class="cd-hero-slider">

                <!-- Page 1 Gallery One -->
                <?php
                     include_once "parts/galery.php";
                ?>

                <!-- Page 2 Gallery Two -->
                <li>                    
                    <div class="cd-full-width">
                        <div class="container-fluid js-tm-page-content" data-page-no="2" data-page-type="gallery">
                            <div class="tm-img-gallery-container">
                                <div class="tm-img-gallery gallery-two">
                                <!-- Gallery Two pop up connected with JS code below -->
                                    
                                    <div class="grid-item">
                                        <figure class="effect-sadie">
                                            <img src="img/tm-img-12-tn.jpg" alt="Image" class="img-fluid tm-img">
                                            <figcaption>
                                                <h2 class="tm-figure-title">Pix <span><strong>One</strong></span></h2>
                                                <p class="tm-figure-description">Suspendisse id placerat risus. Mauris quis luctus risus.</p>
                                                <a href="img/tm-img-12.jpg">View more</a>
                                            </figcaption>           
                                        </figure>
                                    </div>
                                    <div class="grid-item">
                                        <figure class="effect-sadie">
                                            <img src="img/tm-img-11-tn.jpg" alt="Image" class="img-fluid tm-img">
                                            <figcaption>
                                                <h2 class="tm-figure-title">Pix <span><strong>Two</strong></span></h2>
                                                <p class="tm-figure-description">Maecenas purus sem, lobortis id odio in sapien.</p>
                                                <a href="img/tm-img-11.jpg">View more</a>
                                            </figcaption>           
                                        </figure>
                                    </div>
                                    <div class="grid-item">
                                        <figure class="effect-sadie">
                                            <img src="img/tm-img-10-tn.jpg" alt="Image" class="img-fluid tm-img">
                                            <figcaption>
                                                <h2 class="tm-figure-title">Pix <span><strong>Three</strong></span></h2>
                                                <p class="tm-figure-description">Suspendisse id placerat risus. Mauris quis luctus risus.</p>
                                                <a href="img/tm-img-10.jpg">View more</a>
                                            </figcaption>           
                                        </figure>
                                    </div>
                                    <div class="grid-item">
                                        <figure class="effect-sadie">
                                            <img src="img/tm-img-09-tn.jpg" alt="Image" class="img-fluid tm-img">
                                            <figcaption>
                                                <h2 class="tm-figure-title">Pix <span><strong>Four</strong></span></h2>
                                                <p class="tm-figure-description">Maecenas purus sem, lobortis id odio in sapien.</p>
                                                <a href="img/tm-img-09.jpg">View more</a>
                                            </figcaption>           
                                        </figure>
                                    </div>
                                    <div class="grid-item">
                                        <figure class="effect-sadie">
                                            <img src="img/tm-img-08-tn.jpg" alt="Image" class="img-fluid tm-img">
                                            <figcaption>
                                                <h2 class="tm-figure-title">Pix <span><strong>Five</strong></span></h2>
                                                <p class="tm-figure-description">Suspendisse id placerat risus. Mauris quis luctus risus.</p>
                                                <a href="img/tm-img-08.jpg">View more</a>
                                            </figcaption>           
                                        </figure>
                                    </div>
                                    <div class="grid-item">
                                        <figure class="effect-sadie">
                                            <img src="img/tm-img-07-tn.jpg" alt="Image" class="img-fluid tm-img">
                                            <figcaption>
                                                <h2 class="tm-figure-title">Pix <span><strong>Six</strong></span></h2>
                                                <p class="tm-figure-description">Maecenas purus sem, lobortis id odio in sapien.</p>
                                                <a href="img/tm-img-07.jpg">View more</a>
                                            </figcaption>           
                                        </figure>
                                    </div>  
                                    <div class="grid-item">
                                        <figure class="effect-sadie">
                                            <img src="img/tm-img-06-tn.jpg" alt="Image" class="img-fluid tm-img">
                                            <figcaption>
                                                <h2 class="tm-figure-title">Pix <span><strong>Seven</strong></span></h2>
                                                <p class="tm-figure-description">Maecenas purus sem, lobortis id odio in sapien.</p>
                                                <a href="img/tm-img-06.jpg">View more</a>
                                            </figcaption>           
                                        </figure>
                                    </div>  
                                    <div class="grid-item">
                                        <figure class="effect-sadie">
                                            <img src="img/tm-img-05-tn.jpg" alt="Image" class="img-fluid tm-img">
                                            <figcaption>
                                                <h2 class="tm-figure-title">Pix <span><strong>Eight</strong></span></h2>
                                                <p class="tm-figure-description">Maecenas purus sem, lobortis id odio in sapien.</p>
                                                <a href="img/tm-img-05.jpg">View more</a>
                                            </figcaption>           
                                        </figure>
                                    </div>  
                                    <div class="grid-item">
                                        <figure class="effect-sadie">
                                            <img src="img/tm-img-04-tn.jpg" alt="Image" class="img-fluid tm-img">
                                            <figcaption>
                                                <h2 class="tm-figure-title">Pix <span><strong>Nine</strong></span></h2>
                                                <p class="tm-figure-description">Maecenas purus sem, lobortis id odio in sapien.</p>
                                                <a href="img/tm-img-04.jpg">View more</a>
                                            </figcaption>           
                                        </figure>
                                    </div>  
                                    <div class="grid-item">
                                        <figure class="effect-sadie">
                                            <img src="img/tm-img-03-tn.jpg" alt="Image" class="img-fluid tm-img">
                                            <figcaption>
                                                <h2 class="tm-figure-title">Pix <span><strong>Ten</strong></span></h2>
                                                <p class="tm-figure-description">Maecenas purus sem, lobortis id odio in sapien.</p>
                                                <a href="img/tm-img-03.jpg">View more</a>
                                            </figcaption>           
                                        </figure>
                                    </div>  
                                    <div class="grid-item">
                                        <figure class="effect-sadie">
                                            <img src="img/tm-img-02-tn.jpg" alt="Image" class="img-fluid tm-img">
                                            <figcaption>
                                                <h2 class="tm-figure-title">Pix <span><strong>Eleven</strong></span></h2>
                                                <p class="tm-figure-description">Maecenas purus sem, lobortis id odio in sapien.</p>
                                                <a href="img/tm-img-02.jpg">View more</a>
                                            </figcaption>           
                                        </figure>
                                    </div>  
                                    <div class="grid-item">
                                        <figure class="effect-sadie">
                                            <img src="img/tm-img-01-tn.jpg" alt="Image" class="img-fluid tm-img">
                                            <figcaption>
                                                <h2 class="tm-figure-title">Pix <span><strong>Twelve</strong></span></h2>
                                                <p class="tm-figure-description">Maecenas purus sem, lobortis id odio in sapien.</p>
                                                <a href="img/tm-img-01.jpg">View more</a>
                                            </figcaption>           
                                        </figure>
                                    </div> 
                                    <div class="grid-item">
                                        <figure class="effect-sadie">
                                            <img src="img/tm-img-13-tn.jpg" alt="Image" class="img-fluid tm-img">
                                            <figcaption>
                                                <h2 class="tm-figure-title">Pix <span><strong>13</strong></span></h2>
                                                <p class="tm-figure-description">Maecenas purus sem, lobortis id odio in sapien.</p>
                                                <a href="img/tm-img-13.jpg">View more</a>
                                            </figcaption>           
                                        </figure>
                                    </div>  
                                    <div class="grid-item">
                                        <figure class="effect-sadie">
                                            <img src="img/tm-img-14-tn.jpg" alt="Image" class="img-fluid tm-img">
                                            <figcaption>
                                                <h2 class="tm-figure-title">Pix <span><strong>14</strong></span></h2>
                                                <p class="tm-figure-description">Maecenas purus sem, lobortis id odio in sapien.</p>
                                                <a href="img/tm-img-14.jpg">View more</a>
                                            </figcaption>           
                                        </figure>
                                    </div>  
                                    <div class="grid-item">
                                        <figure class="effect-sadie">
                                            <img src="img/tm-img-15-tn.jpg" alt="Image" class="img-fluid tm-img">
                                            <figcaption>
                                                <h2 class="tm-figure-title">Pix <span><strong>15</strong></span></h2>
                                                <p class="tm-figure-description">Maecenas purus sem, lobortis id odio in sapien.</p>
                                                <a href="img/tm-img-15.jpg">View more</a>
                                            </figcaption>           
                                        </figure>
                                    </div>  
                                    <div class="grid-item">
                                        <figure class="effect-sadie">
                                            <img src="img/tm-img-16-tn.jpg" alt="Image" class="img-fluid tm-img">
                                            <figcaption>
                                                <h2 class="tm-figure-title">Pix <span><strong>16</strong></span></h2>
                                                <p class="tm-figure-description">Maecenas purus sem, lobortis id odio in sapien.</p>
                                                <a href="img/tm-img-16.jpg">View more</a>
                                            </figcaption>           
                                        </figure>
                                    </div>  
                                </div>                                 
                            </div>
                        </div>                      
                    </div>
                </li>

                <!-- Page 3 Gallery Three -->
                <li>
                    <div class="cd-full-width">
                        <div class="container-fluid js-tm-page-content" data-page-no="3" data-page-type="gallery">                        
                            <div class="tm-img-gallery-container">
                                <div class="tm-img-gallery gallery-three">
                                <!-- Gallery Two pop up connected with JS code below -->
                                    
                                     <div class="grid-item">
                                        <figure class="effect-sadie">
                                            <img src="img/tm-img-07-tn.jpg" alt="Image" class="img-fluid tm-img">
                                            <figcaption>
                                                <h2 class="tm-figure-title">Photo <span><strong>1</strong></span></h2>
                                                <p class="tm-figure-description">Suspendisse id placerat risus. Mauris quis luctus risus.</p>
                                                <a href="img/tm-img-07.jpg">View more</a>
                                            </figcaption>           
                                        </figure>
                                    </div>
                                    <div class="grid-item">
                                        <figure class="effect-sadie">
                                            <img src="img/tm-img-16-tn.jpg" alt="Image" class="img-fluid tm-img">
                                            <figcaption>
                                                <h2 class="tm-figure-title">Photo <span><strong>2</strong></span></h2>
                                                <p class="tm-figure-description">Maecenas purus sem, lobortis id odio in sapien.</p>
                                                <a href="img/tm-img-16.jpg">View more</a>
                                            </figcaption>           
                                        </figure>
                                    </div>
                                    <div class="grid-item">
                                        <figure class="effect-sadie">
                                            <img src="img/tm-img-02-tn.jpg" alt="Image" class="img-fluid tm-img">
                                            <figcaption>
                                                <h2 class="tm-figure-title">Photo <span><strong>3</strong></span></h2>
                                                <p class="tm-figure-description">Suspendisse id placerat risus. Mauris quis luctus risus.</p>
                                                <a href="img/tm-img-02.jpg">View more</a>
                                            </figcaption>           
                                        </figure>
                                    </div>
                                    <div class="grid-item">
                                        <figure class="effect-sadie">
                                            <img src="img/tm-img-15-tn.jpg" alt="Image" class="img-fluid tm-img">
                                            <figcaption>
                                                <h2 class="tm-figure-title">Photo <span><strong>4</strong></span></h2>
                                                <p class="tm-figure-description">Maecenas purus sem, lobortis id odio in sapien.</p>
                                                <a href="img/tm-img-15.jpg">View more</a>
                                            </figcaption>           
                                        </figure>
                                    </div>
                                    <div class="grid-item">
                                        <figure class="effect-sadie">
                                            <img src="img/tm-img-03-tn.jpg" alt="Image" class="img-fluid tm-img">
                                            <figcaption>
                                                <h2 class="tm-figure-title">Photo <span><strong>5</strong></span></h2>
                                                <p class="tm-figure-description">Suspendisse id placerat risus. Mauris quis luctus risus.</p>
                                                <a href="img/tm-img-03.jpg">View more</a>
                                            </figcaption>           
                                        </figure>
                                    </div>
                                    <div class="grid-item">
                                        <figure class="effect-sadie">
                                            <img src="img/tm-img-14-tn.jpg" alt="Image" class="img-fluid tm-img">
                                            <figcaption>
                                                <h2 class="tm-figure-title">Photo <span><strong>6</strong></span></h2>
                                                <p class="tm-figure-description">Maecenas purus sem, lobortis id odio in sapien.</p>
                                                <a href="img/tm-img-14.jpg">View more</a>
                                            </figcaption>           
                                        </figure>
                                    </div>
                                    <div class="grid-item">
                                        <figure class="effect-sadie">
                                            <img src="img/tm-img-04-tn.jpg" alt="Image" class="img-fluid tm-img">
                                            <figcaption>
                                                <h2 class="tm-figure-title">Photo <span><strong>7</strong></span></h2>
                                                <p class="tm-figure-description">Suspendisse id placerat risus. Mauris quis luctus risus.</p>
                                                <a href="img/tm-img-04.jpg">View more</a>
                                            </figcaption>           
                                        </figure>
                                    </div>
                                    <div class="grid-item">
                                        <figure class="effect-sadie">
                                            <img src="img/tm-img-13-tn.jpg" alt="Image" class="img-fluid tm-img">
                                            <figcaption>
                                                <h2 class="tm-figure-title">Photo <span><strong>8</strong></span></h2>
                                                <p class="tm-figure-description">Maecenas purus sem, lobortis id odio in sapien.</p>
                                                <a href="img/tm-img-13.jpg">View more</a>
                                            </figcaption>           
                                        </figure>
                                    </div>    
                                    <div class="grid-item">
                                        <figure class="effect-sadie">
                                            <img src="img/tm-img-05-tn.jpg" alt="Image" class="img-fluid tm-img">
                                            <figcaption>
                                                <h2 class="tm-figure-title">Photo <span><strong>9</strong></span></h2>
                                                <p class="tm-figure-description">Suspendisse id placerat risus. Mauris quis luctus risus.</p>
                                                <a href="img/tm-img-05.jpg">View more</a>
                                            </figcaption>           
                                        </figure>
                                    </div>
                                    <div class="grid-item">
                                        <figure class="effect-sadie">
                                            <img src="img/tm-img-12-tn.jpg" alt="Image" class="img-fluid tm-img">
                                            <figcaption>
                                                <h2 class="tm-figure-title">Photo <span><strong>10</strong></span></h2>
                                                <p class="tm-figure-description">Maecenas purus sem, lobortis id odio in sapien.</p>
                                                <a href="img/tm-img-12.jpg">View more</a>
                                            </figcaption>           
                                        </figure>
                                    </div>
                                    <div class="grid-item">
                                        <figure class="effect-sadie">
                                            <img src="img/tm-img-06-tn.jpg" alt="Image" class="img-fluid tm-img">
                                            <figcaption>
                                                <h2 class="tm-figure-title">Photo <span><strong>11</strong></span></h2>
                                                <p class="tm-figure-description">Suspendisse id placerat risus. Mauris quis luctus risus.</p>
                                                <a href="img/tm-img-06.jpg">View more</a>
                                            </figcaption>           
                                        </figure>
                                    </div>
                                    <div class="grid-item">
                                        <figure class="effect-sadie">
                                            <img src="img/tm-img-11-tn.jpg" alt="Image" class="img-fluid tm-img">
                                            <figcaption>
                                                <h2 class="tm-figure-title">Photo <span><strong>12</strong></span></h2>
                                                <p class="tm-figure-description">Maecenas purus sem, lobortis id odio in sapien.</p>
                                                <a href="img/tm-img-11.jpg">View more</a>
                                            </figcaption>           
                                        </figure>
                                    </div>                                                                                              
                                </div>                                 
                            </div> <!-- .tm-img-gallery-container -->
                        </div>         
                    </div>  
                </li>

                <!-- Page 4 About -->
                <li>
                    <div class="cd-full-width">
                        <div class="container-fluid js-tm-page-content tm-page-width tm-pad-b" data-page-no="4">

                            <div class="tm-about-page">
                            
                            	<div class="row tm-white-box-margin-b">
                                    <div class="col-xs-12">
                                        <div class="tm-flex">
                                            <div class="tm-bg-white-translucent text-xs-left tm-textbox tm-2-col-textbox-2 tm-textbox-padding">
                                                <h2 class="tm-text-title">Multiple Columns</h2>
                                                <p class="tm-text">Set true or false in HTML page line number 40 to turn on off page color. Mauris elit elit, imperdiet nec lorem sed, finibus maximus mauris. Nam laoreet eros nec convallis placerat.</p>
                                            </div>
                                            <div class="tm-bg-white-translucent text-xs-left tm-textbox tm-2-col-textbox-2 tm-textbox-padding">
                                                <h2 class="tm-text-title">Class aptent taciti</h2>
                                                <p class="tm-text">Aenean congue nulla et ligula consectetur consequat. Nullam fringilla blandit risus vitae auctor. Donec sed sapien varius, tincidunt nulla ut, ultrices nisl.</p>     
                                            </div>
                                            <div class="tm-bg-white-translucent text-xs-left tm-textbox tm-2-col-textbox-2 tm-textbox-padding">
                                                <h2 class="tm-text-title">Aenean auctor</h2>
                                                <p class="tm-text">Integer enim tortor, tempor quis augue luctus, condimentum porttitor urna. Maecenas condimentum suscipit tortor vitae convallis.</p>     
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                                
                                <div class="row tm-white-box-margin-b">
                                    <div class="col-xs-12">
                                        <div class="tm-flex">
                                            <div class="tm-bg-white-translucent text-xs-left tm-textbox tm-2-col-textbox-2 tm-textbox-padding">
                                                <h2 class="tm-text-title">Nulla vitae magna</h2>
                                                <p class="tm-text">Donec at felis at risus mattis efficitur. Pellentesque dui urna, blandit a congue ut, blandit sed eros. Sed sagittis consequat pellentesque. Vivamus eros turpis, lobortis sed fermentum euismod, vehicula id eros.</p>
                                            </div>
                                            <div class="tm-bg-white-translucent text-xs-left tm-textbox tm-2-col-textbox-2 tm-textbox-padding">
                                                <h2 class="tm-text-title">Pellentesque dui urna</h2>
                                                <p class="tm-text">Maecenas porta placerat lacus a lacinia. In imperdiet cursus erat, luctus molestie lorem congue at. Donec fringilla tortor non ipsum semper, sit amet aliquet magna rutrum.</p>     
                                            </div>
                                        </div>
                                    </div>
                                </div>  

                                
                                
                                <div class="row tm-white-box-margin-b">
                                    <div class="col-xs-12">
                                        <div class="tm-flex">
                                            <div class="tm-bg-white-translucent text-xs-left tm-textbox tm-textbox-padding">
                                                <h2 class="tm-text-title">One Single Column</h2>
                                                <p class="tm-text">You can simply set <strong>var tm_gray_site = true;</strong> or <strong>var tm_gray_site = false;</strong> in the HTML top script tag to enable / disable gray scale or color of the page. Vivamus sit amet scelerisque diam. Donec congue feugiat consectetur. Donec facilisis, elit non suscipit pretium, lacus quam feugiat nulla, id tempus libero tellus ut nisi. Mauris non mi molestie, tristique nibh eu, auctor nibh. Fusce accumsan pretium ex in ullamcorper.</p>
                                                <p class="tm-text">Ut blandit nisi purus, eget imperdiet sapien sodales et. Duis euismod, elit in laoreet cursus, ante diam facilisis lacus, sit amet aliquam odio quam ut libero. Proin bibendum ex nec lorem semper euismod. Nulla sed urna at ligula maximus blandit.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                                                   
                        </div>              
                    </div> <!-- .cd-full-width -->

                </li>

                <!-- Page 5 Contact Us -->
                <li>
                    <div class="cd-full-width">
                        <div class="container-fluid js-tm-page-content tm-page-pad" data-page-no="5">
                            <div class="tm-contact-page">                                
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="tm-flex tm-contact-container">                                
                                            <div class="tm-bg-white-translucent text-xs-left tm-textbox tm-2-col-textbox-2 tm-textbox-padding tm-textbox-padding-contact">
                                                <h2 class="tm-contact-info">Feel free to say Hi!</h2>
                                                <p class="tm-text">Nulla sed urna at ligula maximus blandit. Mauris nisi ligula, ultricies ac diam id, hendrerit tincidunt ipsum. Maecenas non massa justo.</p>                                                
                                                
                                                <!-- contact form -->
                                                <form action="index.html" method="post" class="tm-contact-form">

                                                    <div class="form-group">
                                                        <input type="text" id="contact_name" name="contact_name" class="form-control" placeholder="Name"  required/>
                                                    </div>
                                        
                                                    <div class="form-group">                                                        
                                                        <input type="email" id="contact_email" name="contact_email" class="form-control" placeholder="Email"  required/>
                                                    </div>                                                        
                                                    
                                                    <div class="form-group">
                                                        <textarea id="contact_message" name="contact_message" class="form-control" rows="5" placeholder="Message" required></textarea>
                                                    </div> 

                                                    <button type="submit" class="pull-xs-right tm-submit-btn">Send</button>  
                                                
                                                </form>  
                                            </div>

                                            <div class="tm-bg-white-translucent text-xs-left tm-textbox tm-2-col-textbox-2 tm-textbox-padding tm-textbox-padding-contact">
                                                <h2 class="tm-contact-info">4466 Old New St 28290, SF, California</h2>
                                                <!-- google map goes here -->
                                                <div id="google-map"></div>
                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>    

                        </div>
                        
                    </div> <!-- .cd-full-width -->
                </li>
            </ul> <!-- .cd-hero-slider -->
            
            <?php 
                include_once "parts/footer.php" 
            ?> 
                    

</body>
</html>