<?php

ini_set('display_errors',1);
error_reporting(E_ALL);

require_once("admin/phpscripts/init.php");

$tbl = "tbl_about";
$a_para1 = getAll($tbl);
$a_image1 = getAll($tbl);
$a_para2 = getAll($tbl);
$a_para3 = getAll($tbl);
$a_image2 = getAll($tbl);

$h_para1 = getAll($tbl);
$h_para2 = getAll($tbl);

$bi_para1 = getAll($tbl);
$bi_image1 = getAll($tbl);

$l_para1 = getAll($tbl);
$l_1 = getAll($tbl);
$l_2 = getAll($tbl);

$lastpara = getAll($tbl);

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

      <title>Chantry Island Tours - About the Island</title>

      <link href="css/bootstrap/bootstrap-flex.css" rel="stylesheet" type="text/css">
      <link href="css/bootstrap/bootstrap-grid.css" rel="stylesheet" type="text/css">
      <link href="css/bootstrap/bootstrap-reboot.css" rel="stylesheet" type="text/css">
      <link href="css/bootstrap/bootstrap.css" rel="stylesheet" type="text/css">

      <link href="css/normalize.css" rel="stylesheet" type="text/css">
      <link href="css/chanty.css" rel="stylesheet" type="text/css">
      <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">



          <script src="script/greensock/TweenMax.min.js"></script>
          <script src="script/greensock/TimelineMax.min.js"></script>
          <script src="script/greensock/ScrollToPlugin.min.js"></script>
          <script src="script/greensock/TweenLite.min.js"></script>

    </head>

  <body>

    <!--.................
    ... BEGIN SITE.......
    ..................-->

    <header class="main_header" id="about_header"> <!--     *     *     *       [start HEADER]    *     *     *      -->

      <div class="container-fluid"><!-- header container -->

       <div class="row align-items-end justify-content-center justify-content-lg-between top_con"><!-- TOP container -->
         <h2 class="sr-only">Home Navigation</h2>
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

            <li class="nav-item transparent"><a class="nav-link" href="about.php">ABOUT</a></li>

            <li class="hidden-md-down"><p>|</p></li>

            <li class="nav-item"><a class="nav-link" href="photogallery.php">GALLERY</a></li>

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
      <h2 class="sr-only">Book Tour CTA</h2>
      <div class="container">
      <div class="row d-flex justify-content-center">
      <a href="tours.php"><button class="red_book_but">BOOK A TOUR</button></a>
      </div>
      </div>
    </section>



    <section id="about_section_1"><!--     *     *     *       [start about section 1: About the Island]    *     *     *      -->

         <div class="container-fluid">
           <div class="row justify-content-center">
            <div class="col-12 col-lg-10 grey_box mtop_box">


            <img src="img/about/boat.svg" alt="Boat Icon" id="about_boat">


               <h3 class="box_heading">ABOUT THE ISLAND</h3>


                <img src="img/tours/waves.svg" alt="Waves Icon" class="hidden-md-down" id="about_waves">

               <!-- aboutParagraph #1 -->
               <div class="row" id="about_para1">
               <div class="col-12">
               <?php
               if(!is_string($a_para1)){
                 while($row = mysqli_fetch_array($a_para1)){

                   echo "<p class=\"box_para\">{$row['about_para1']}</p>";
                 }
               }else{
                 echo "<p>{$a_para1}</p>";
               }
                ?>
                 </div>
                 </div>
               <!-- end about Paragraph #1 -->


               <!-- about image #1 -->
               <div class="row">
               <div class="col-12 nogutter">
               <?php
               if(!is_string($a_image1)){
                 while($row = mysqli_fetch_array($a_image1)){

                   echo "<img src=\"img/about/{$row['about_image1']}\" alt=\"About Image 1\">";
                 }
               }else{
                 echo "<p>{$a_image1}</p>";
               }
                ?>
                 </div>
                 </div>
               <!-- end about image #1 -->

               <!-- aboutParagraph #2 & 3 -->
               <div class="row justify-content-center">
               <div class="col-11 blue_box mtop_box mbot_box">
               <?php
               if(!is_string($a_para2)){
                 while($row = mysqli_fetch_array($a_para2)){

                   echo "<p class=\"box_para\">{$row['about_para2']}</p>";
                   echo "<p class=\"box_para\">{$row['about_para3']}</p>";
                 }
               }else{
                 echo "<p>{$a_para2}</p>";
               }
                ?>
                 </div>
                 </div>
               <!-- end about Paragraph #2 & 3 -->

         </div>
          </div>

          <div class="row">
            <div class="col-12 nogutter">
              <img src="img/waves/wave_bottom.svg" class="wave_bottom" alt="Wave Top Icon">
            </div>
          </div>

          </div>

    </section><!--     *     *     *       [end about section 1]    *     *     *      -->




    <section id="about_image2_section"><!--     *     *     *       [start about image2 section]    *     *     *      -->
    <h2 class="sr-only">Island Image - Aerial View</h2>
       <div class="container-fluid">
       <div class="row justify-content-center">
       <div class="col-9 col-md-8 col-lg-6">


      <?php
      if(!is_string($a_image2)){
        while($row = mysqli_fetch_array($a_image2)){

          echo "<img src=\"img/about/{$row['about_image2']}\" class=\"big_box_shadow img-fluid\" alt=\"About Image\">";
        }
      }else{
        echo "<p>{$a_image2}</p>";
      }
       ?>


      </div>
      </div>
      </div>

    </section><!--     *     *     *       [end about image 1 section]    *     *     *      -->




        <section id="about_section_2"><!--     *     *     *       [start about section 2: Chantry Lighthouse History]    *     *     *      -->

             <div class="container-fluid">
               <div class="row justify-content-center">
                <div class="col-12 col-lg-11 red_box" id="about_section_2_box">

                   <h3 class="box_heading">CHANTRY LIGHTHOUSE HISTORY</h3>


                   <!-- history Paragraph #1 -->
                   <div class="row">
                   <div class="col-12">
                   <?php
                   if(!is_string($h_para1)){
                     while($row = mysqli_fetch_array($h_para1)){

                       echo "<p class=\"box_para\">{$row['about_hist_para1']}</p>";
                       echo "<p class=\"box_para\">{$row['about_hist_para2']}</p>";
                     }
                   }else{
                     echo "<p>{$h_para1}</p>";
                   }
                    ?>
                     </div>
                     </div>
                   <!-- end history Paragraph #1 -->


                   <div class="row justify-content-center">
                     <div class="col-4 col-sm-3 col-md-2">
                   <img src="img/logos/circleLogo.svg" class="img-fluid" alt="Chantry Small Logo">
                   </div>
                 </div>


             </div>
              </div>

              </div>

        </section><!--     *     *     *       [end about section 2]    *     *     *      -->




        <section id="about_section_3"><!--     *     *     *       [start about section 3: Federal Bird Sanctuary]    *     *     *      -->

             <div class="container-fluid">
               <div class="row hidden-md-down">
                 <div class="col-12 nogutter">
                   <img src="img/waves/wave_top.svg" class="wave_top" alt="Wave Top Icon">
                 </div>
                </div>

               <div class="row justify-content-center">
                <div class="col-12 col-lg-10 grey_box spec_box1_lg" id="about_section_3_box">


                  <h3 class="box_heading">FEDERAL BIRD SANCTUARY</h3>

                  <!-- deatils Paragraph #1 -->
                  <div class="row">
                  <div class="col-12">
                  <?php
                  if(!is_string($bi_para1)){
                    while($row = mysqli_fetch_array($bi_para1)){

                      echo "<p class=\"box_para\">{$row['about_bird_para1']}</p>";
                    }
                  }else{
                    echo "<p>{$bi_para1}</p>";
                  }
                   ?>
                    </div>
                  </div>
                  <!-- end booking Paragraph #1 -->

                  <img src="img/about/birds.svg" alt="Birds Icon" id="about_birds">
                  <img src="img/about/birds2.svg" alt="Birds Icon" class="hidden-md-down" id="about_birds2">

          </div>
          </div>
          </div>

        </section><!--     *     *     *       [end about section 3]    *     *     *      -->

        <section id="about_bird_image1_section"><!--     *     *     *       [start about Bird Image section]    *     *     *      -->
          <h2 class="sr-only">Bird Sanctuary Image</h2>
          <div class="container-fluid">
            <div class="row justify-content-center">
              <div class="col-10 col-lg-6 mtop_box nogutter">
                <?php
                if(!is_string($bi_image1)){
                  while($row = mysqli_fetch_array($bi_image1)){

                    echo "<img src=\"img/about/{$row['about_bird_image1']}\" class=\"img-fluid\" alt=\"About Bird Image\">";
                  }
                }else{
                  echo "<p>{$bi_image1}</p>";
                }
                 ?>

              </div>
              </div>
              </div>

        </section><!--     *     *     *       [end about bird image section]    *     *     *      -->

        <section class="hidden-md-down blue_book_button">
          <h2 class="sr-only">Book Tour CTA</h2>
          <div class="container">
          <div class="row d-flex justify-content-center">
          <a href="tours.php"><button class="blue_book_but">BOOK A TOUR</button></a>
          </div>
          </div>
        </section>


        <section id="about_section_4"><!--     *     *     *       [start about section 4: Lighthouaw Restoration]    *     *     *      -->

             <div class="container-fluid">
               <div class="row justify-content-center">
                <div class="col-12 col-lg-10 red_box mtop_box">

                   <h3 class="box_heading">LIGHTHOUSE RESTORATION</h3>


                   <!-- lighthouse Paragraph #1 -->
                   <div class="row">
                   <div class="col-12">
                   <?php
                   if(!is_string($l_para1)){
                     while($row = mysqli_fetch_array($l_para1)){

                       echo "<p class=\"box_para\">{$row['about_lhouse_para1']}</p>";
                     }
                   }else{
                     echo "<p>{$l_para1}</p>";
                   }
                    ?>
                     </div>
                     </div>
                   <!-- end lighthouse Paragraph #1 -->


                   <div class="row justify-content-center">
                     <div class="col-3 col-sm-2 col-md-2">
                   <img src="img/about/hammer.svg" class="img-fluid icon_padding" alt="Chantry Small Logo">
                   </div>
                 </div>


             </div>
              </div>
              </div>


              <div class="container-fluid">
                <div class="row justify-content-center">
                 <div class="col-12 col-lg-11 grey_box">



                    <!-- lighthouse images -->
                    <div class="row justify-content-center">
                    <?php
                    if(!is_string($l_1)){
                      while($row = mysqli_fetch_array($l_1)){

                        echo "<div class=\"col-6 col-md-5  col-lg-5 lhouse_con nogutter\">";
                        echo "<img src=\"img/about/{$row['about_lhouse_image1']}\" alt=\"Lighthouse Image Before\">";
                        echo "<div class=\"d-flex justify-content-center\"><p class=\"lhouse_caption\" data-box=\"0\">BEFORE</p></div>";
                        echo "<div class=\"lhouse_overlay\"><p class=\"lhouse_info\">{$row['about_l_binfo']}</p></div>";
                        echo "</div>";
                        echo "<div class=\"col-6 col-md-5 col-lg-5 lhouse_con nogutter\">";
                        echo "<img src=\"img/about/{$row['about_lhouse_image2']}\" alt=\"Lighthouse Image After\">";
                        echo "<div class=\"d-flex justify-content-center\"><p class=\"lhouse_caption\" data-box=\"1\">AFTER</p></div>";
                        echo "<div class=\"lhouse_overlay\"><p class=\"lhouse_info lhouse_info_a\">{$row['about_l_ainfo']}</p></div>";
                        echo "</div>";
                      }
                    }else{
                      echo "<p>{$l_1}</p>";
                    }
                     ?>
                   </div>
                    <!-- lighthouse images -->

              </div>
               </div>

               <div class="row">
                 <div class="col-12 nogutter">
                   <img src="img/waves/wave_bottom.svg" class="wave_bottom" alt="Wave Top Icon">
                 </div>
               </div>

               </div>

        </section><!--     *     *     *       [end about section 4]    *     *     *      -->


      <div class="container hidden-lg-up" id="mobile_lhouse_info_con">
        <div class="row">
          <!-- <div class="col-12">
            <button id="close_but"><i class="fa fa-times" aria-hidden="true"></i>
              </button>
          </div> -->
            <div class="col-12">
              <?php
              if(!is_string($l_2)){
                while($row = mysqli_fetch_array($l_2)){
                  echo "<p id=\"before_info\" class=\"m_info\">{$row['about_l_binfo']}</p>";
                  echo "<p id=\"after_info\" class=\"m_info\">{$row['about_l_ainfo']}</p>";
                }
              }else{
                echo "<p>{$l_2}</p>";
              }
                  ?>
            </div>

        </div>
      </div>


        <section id="about_section_5"><!--     *     *     *       [start about section 5: partners- last paragraph]    *     *     *      -->
          <h2 class="sr-only">Ocean Wave</h2>
             <div class="container-fluid">
               <div class="row">
                 <div class="col-12 nogutter">
                   <img src="img/waves/wave_top.svg" class="wave_top" alt="Wave Top Icon">
                 </div>
                </div>

               <div class="row justify-content-center">
                <div class="col-11 col-lg-10 blue_box spec_box1">


                  <!--about last paragraph -->
                  <div class="row">
                  <div class="col-12">
                  <?php
                  if(!is_string($lastpara)){
                    while($row = mysqli_fetch_array($lastpara)){

                      echo "<p class=\"box_para\">{$row['about_lastpara']}</p>";
                    }
                  }else{
                    echo "<p>{$lastpara}</p>";
                  }
                   ?>
                    </div>
                  </div>
                  <!-- end about last paragraph -->

                  <div class="row d-flex justify-content-center">
                  <a href="tours.php"> <button class="white_book_but">BOOK A TOUR</button></a>
                  </div>


          </div>
          </div>
          </div>

        </section><!--     *     *     *       [end about section 5]    *     *     *      -->





          <footer class="main_footer" id="about_footer"><!--     *     *     *       [start footer]    *     *     *      -->

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
                 <li class="nav-item"><a class="nav-link" href="about.php">ABOUT</a></li>
                 <li class="transparent"><p>|</p></li>
                 <li class="nav-item transparent"><a class="nav-link" href="photogallery.php">GALLERY</a></li>
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
                <button class="login_close"><i class="fa fa-times" aria-hidden="true"></i></button>
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

          <script src="script/main.js"></script>
          <script src="script/about.js"></script>
          <script src="script/navbar.js"></script>
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
          <script src="script/bootstrap/bootstrap.js"></script>

          </body>

          </html>
