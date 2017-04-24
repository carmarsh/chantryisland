<?php

ini_set('display_errors',1);
error_reporting(E_ALL);

require_once("admin/phpscripts/init.php");

$tbl = "tbl_gallery";
$gallery = getAll($tbl);

//info for grabbing phone #
$tbl_tours = "tbl_tours";
$phone = getAll($tbl_tours);


 ?>

  <!DOCTYPE HTML>
  <HTML lang="en">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <title>Chantry Island Tours - Gallery</title>

      <link href="css/bootstrap/bootstrap-flex.css" rel="stylesheet" type="text/css">
      <link href="css/bootstrap/bootstrap-grid.css" rel="stylesheet" type="text/css">
      <link href="css/bootstrap/bootstrap-reboot.css" rel="stylesheet" type="text/css">
      <link href="css/bootstrap/bootstrap.css" rel="stylesheet" type="text/css">

      <link href="css/normalize.css" rel="stylesheet" type="text/css">
      <link href="css/chanty.css" rel="stylesheet" type="text/css">
      <!-- <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet"> -->



          <script src="script/greensock/TweenMax.min.js"></script>
          <script src="script/greensock/TimelineMax.min.js"></script>
          <script src="script/greensock/ScrollToPlugin.min.js"></script>
          <script src="script/greensock/TweenLite.min.js"></script>

    </head>

  <body>

    <!--.................
    ... BEGIN SITE.......
    ..................-->

    <header class="main_header" id="gallery_header"> <!--     *     *     *       [start HEADER]    *     *     *      -->
       <h2 class="sr-only">Home Navigation</h2>
      <div class="container-fluid"><!-- header container -->

       <div class="row align-items-end justify-content-center justify-content-lg-between top_con"><!-- TOP container -->

         <div class="hidden-md-down col-lg-3 home_button_con">
         <a href="index.php">HOME</a>
         </div>

         <div class="col-8 col-sm-6 col-md-4 col-lg-3 logo_con">
         <img src="img/logos/logo.svg" class="main_logo" alt="Chantry Island Logo">
         </div>

         <div class="hidden-md-down col-lg-3 icon_con">
           <ul>
             <li class="transparent"><a target="_blank" href="https://twitter.com/search?q=%23chantryisland&src=typd"><img src="img/icons/twitter.svg" alt="twitter icon"></a></li>
             <li class="transparent"><a target="_blank" href="https://www.facebook.com/MarineHeritageSociety"><img src="img/icons/facebook.svg" alt="facebook icon"></a></li>
             <li class="transparent"><a target="_blank" href="https://www.google.com/maps/place/Chantry+Island/@44.4898992,-81.4085863,16z/data=!3m1!4b1!4m5!3m4!1s0x8829ce5f8c20f7df:0x1401a4a7bb9f19b6!8m2!3d44.490083!4d-81.4038577"><img src="img/icons/location.svg" alt="location icon"></a></li>
             <li class="transparent"><a target="_blank" href="mailto:chantryisland@bmts.com"><img src="img/icons/mail.svg" alt="mail icon"></a></li>
             <li class="transparent">
               <?php
               if(!is_string($phone)){
                 while($row = mysqli_fetch_array($phone)){
               echo "<a href=\"tel:{$row['tours_booking_phone']}\"><img src=\"img/icons/phone.svg\" alt=\"phone icon\"></a>";
             }
           }else{
             echo "<p>{$phone}</p>";
           }
            ?>
          </li>
           </ul>
         </div>

    </div><!-- end TOP container -->

    <div class="row justify-content-center">
      <div class="hidden-lg-up col-9 col-sm-7 col-md-5">
      <img src="img/waves/singleWave.svg" class="img-fluid" alt="Red Wave Underline">
    </div>
    </div>


    <div class="main_nav_con">
      <nav class="navbar navbar-toggleable-md navbar-light bg-faded main_nav"> <!-- .. ... .... START MAIN NAV .... ... ..-->
         <h2 class="sr-only">Main Navigation</h2>
        <button class="navbar-toggler navbar-toggler-right hamburger-button" type="button" data-toggle="collapse"
        data-target=".nav_content" aria-controls="nav_content" aria-expanded="false" aria-label="Toggle navigation">
          <span></span>
        </button>

        <div class="collapse navbar-collapse nav_content">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item hidden-lg-up"><a class="nav-link" href="index.php">HOME</a></li>

            <li class="nav-item"><a class="nav-link" href="tours.php">TOURS</a></li>

            <li class="hidden-md-down"><p>|</p></li>

            <li class="nav-item"><a class="nav-link" href="about.php">ABOUT</a></li>

            <li class="hidden-md-down"><p>|</p></li>

            <li class="nav-item transparent"><a class="nav-link" href="photogallery.php">GALLERY</a></li>

            <li class="hidden-md-down"><p>|</p></li>

            <li class="nav-item"><a class="nav-link" href="community.php">COMMUNITY</a></li>

             <li class="hidden-md-down"><p>|</p></li>

            <li class="nav-item"><a class="nav-link" href="donate.php">DONATE</a></li>

            <li class="hidden-md-down"><p>|</p></li>

            <li class="nav-item"><a class="nav-link" href="contact.php">CONTACT</a></li>
          </ul>
        </div>

      </nav><!-- .. ... .... end MAIN NAV .... ... ..-->
     </div>


    </div><!-- end header container -->

    </header><!--     *     *     *       [end HEADER]    *     *     *      -->

    <section class="hidden-md-down top_book_button">
       <h2 class="sr-only"> Book Tour CTA</h2>
      <div class="container">
      <div class="row d-flex justify-content-center">
      <a href="tours.php"><button class="red_book_but">BOOK A TOUR</button></a>
      </div>
      </div>
    </section>

<!-- START expanded gallery MODAL -->
    <div id="expanded_gallery_con" class="container">
    <div class="row justify-content-center">

      <div id="expanded_gallery" class="col-12 col-md-10 col-lg-9 big_box_shadow">


        <div id="close_button_con">
        <button id="close_button">X</button>
        </div>

      <div class="row justify-content-center" id="galImage_con">
        <div class="col-10">
      <img class="galImage_large img-fluid big_box_shadow" src="" alt="gallery image">
      </div>
      </div>

      <div class="row justify-content-center" id="galImage_desc_con">
        <div class="col-10 col-lg-9">
      <p class="galImage_desc box_spec4">description</p>
      </div>
      </div>

    <div id="galImage_control_con">
      <button id="back_button">←</button>
      <button id="next_button">→</button>
    </div>

    </div>

    </div>
    </div>
    <!-- end expanded gallery MODAL -->



    <section id="gallery_section_1"><!--     *     *     *       [start donate section 1]    *     *     *      -->

         <div class="container-fluid">
           <div class="row justify-content-center">
            <div class="col-12 col-lg-10 grey_box mtop_box">



               <h3 class="box_heading">GALLERY</h3>
               <div class="row">
                <?php
                 if(!is_string($gallery)){
                   while($row = mysqli_fetch_array($gallery)){

                     echo "<div class=\"col-6 col-sm-4 galImage_thumb_con\">
                           <img src=\"img/gallery/{$row['gallery_thumb']}\" alt=\"Gallery Image Thumbnail\" id=\"{$row['gallery_id']}\" class=\"img-fluid galImage_thumb galimg\">
                           <div class=\"galImage_overlay galimg\" id=\"{$row['gallery_id']}\"></div>
                           </div>";

                   }
                 }else{
                   echo "<p>{$gallery}</p>";
                 }
                  ?>

               </div>



         </div>
          </div>

          <div class="row">
            <div class="col-12 nogutter">
              <img src="img/waves/wave_bottom.svg" class="wave_bottom" alt="Wave Top Icon">
            </div>
          </div>
          </div>

    </section><!--     *     *     *       [end about section 1]    *     *     *      -->



    <div class="container-fluid">
      <div class="row">
        <div class="col-12 nogutter">
          <img src="img/waves/wave_top.svg" class="wave_top" alt="Wave Top Icon">
        </div>
       </div>

      <div class="row justify-content-center">
       <div class="col-11 col-lg-8 red_box spec_box1">


         <div class="row d-flex justify-content-center">
           <a href="tours.php"><button class="white_book_but_spec">BOOK A TOUR</button></a>
         </div>


   </div>
   </div>
   </div>


                  <footer class="main_footer" id="gallery_footer"><!--     *     *     *       [start footer]    *     *     *      -->

                  <div class="container-fluid">
                    <div class="row align-items-center">

                      <div class="hidden-md-down col-lg-1 transparent logo_con">
                      <img src="img/logos/circleLogo.svg" alt="Small Chantry Islands Logo">
                     </div>

                    <div class="hidden-md-down col-lg-6 nav_con">
                      <ul>
                         <li class="nav-item transparent"><a class="nav-link" href="index.php">HOME</a></li>
                         <li class="transparent"><p>|</p></li>
                         <li class="nav-item transparent"><a class="nav-link" href="tours.php">TOURS</a></li>
                         <li class="transparent"><p>|</p></li>
                         <li class="nav-item transparent"><a class="nav-link" href="about.php">ABOUT</a></li>
                         <li class="transparent"><p>|</p></li>
                         <li class="nav-item"><a class="nav-link" href="photogallery.php">GALLERY</a></li>
                         <li class="transparent"><p>|</p></li>
                         <li class="nav-item transparent"><a class="nav-link" href="community.php">COMMUNITY</a></li>
                         <li class="transparent"><p>|</p></li>
                         <li class="nav-item transparent"><a class="nav-link" href="donate.php">DONATE</a></li>
                         <li class="transparent"><p>|</p></li>
                         <li class="nav-item transparent"><a class="nav-link" href="contact.php">CONTACT</a></li>
                       </ul>
                  </div>

                  <div class="col-12 col-lg-3 icon_con">
                    <ul>
                      <li class="transparent"><a href="#"><img src="img/icons/twitter2.svg" alt="twitter icon"></a></li>
                      <li class="transparent"><a href="#"><img src="img/icons/facebook2.svg" alt="facebook icon"></a></li>
                      <li class="transparent"><a href="#"><img src="img/icons/location2.svg" alt="location icon"></a></li>
                      <li class="transparent"><a href="#"><img src="img/icons/mail2.svg" alt="mail icon"></a></li>
                      <li class="transparent"><a href="#"><img src="img/icons/phone2.svg" alt="phone icon"></a></li>
                    </ul>
                  </div>

                  <div class="hidden-md-down col-lg-2 login_button">
                   <a href="#" class="admin_login_but">ADMIN SIGN-IN</a>
                  </div>


                  </div>
                  </div>


                  </footer><!--     *     *     *       [end footer]    *     *     *      -->



                     <div class="admin_login_con nogutter" id="login_con">
                  <button class="login_close"></button>
                       <div class="d-flex justify-content-center align-items-center login_con_inner">

                       <form action="index.php" method="post">

                         <label>Username:</label>
                         <input type="text" name="username" value="" class="textbox">

                         <label>Password:</label>
                         <input type="password" name="password" value="" class="textbox">

                         <input type="submit" name="submit" value="LOG IN">

                       </form>


                       <?php
                       echo $_SESSION['message'];
                        ?>

                        <?php
                        echo $_SESSION['message2'];
                         ?>

                         <?php
                         echo $_SESSION['message2'];
                          ?>

                       </div>

                     </div>


                  <!--.................
                  ... END SITE.......
                  ..................-->




                  <script src="script/about.js"></script>
                  <script src="script/navbar.js"></script>
                  <script src="script/gallery2.js"></script>
                  <script src="script/main.js"></script>
                  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
                  <script src="script/bootstrap/bootstrap.js"></script>

                  </body>

                  </html>
