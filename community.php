<?php

ini_set('display_errors',1);
error_reporting(E_ALL);

require_once("admin/phpscripts/init.php");

$tbl1 = "tbl_community";
$vol_para = getAll($tbl1);

$tbl2 = "tbl_community_volunteers";
$vol_1 = getAll($tbl2);

$tbl3 = "tbl_community_volunteers2";
$vol_2 = getAll($tbl3);

$tbl4 = "tbl_community_events";
$events = getAll($tbl4);

$tbl5 = "tbl_community_partners";
$partners = getAll($tbl5);

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

      <title>Chantry Island Tours - The Community</title>

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

    <header class="main_header" id="comm_header"> <!--     *     *     *       [start HEADER]    *     *     *      -->
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

            <li class="nav-item"><a class="nav-link" href="photogallery.php">GALLERY</a></li>

            <li class="hidden-md-down"><p>|</p></li>

            <li class="nav-item transparent"><a class="nav-link" href="community.php">COMMUNITY</a></li>

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



    <section id="comm_section_1"><!--     *     *     *       [start community section 1: Our Volunteers]    *     *     *      -->
      <h2 class="sr-only">Volunteers Info</h2>
         <div class="container-fluid">
           <div class="row justify-content-center">
            <div class="col-12 col-lg-10 grey_box mtop_box">


            <img src="img/comm/ribbon.svg" alt="Ribbon Icon" class="hidden-md-down" id="comm_ribbon">


               <h3 class="box_heading" id="vol_heading">OUR VOLUNTEERS</h3>

               <!-- volunteer Paragraph #1 -->
               <div class="row">
               <div class="col-12" id="vol_para1">
               <?php
               if(!is_string($vol_para)){
                 while($row = mysqli_fetch_array($vol_para)){

                   echo "<p class=\"box_para\">{$row['comm_vol_para1']}</p>";
                 }
               }else{
                 echo "<p>{$vol_para}</p>";
               }
                ?>
                 </div>
                 </div>
               <!-- end volunteer  Paragraph #1 -->

               <div class="d-flex justify-content-center">
                 <p class="box_heading_spec">THANK YOU</p>
               </div>

               <div class="row justify-content-center">
               <div class="col-5 col-sm-3 col-md-2 align-self-center">
                <img src="img/home/people.svg" alt="People Icon" class="img-fluid box_icon">
               </div>
               </div>




               <div class="row justify-content-center" id="vol_con">
                 <div class="col-8">


               <div class="row" id="vol_1_con">
                 <?php

                 if(!is_string($vol_1)){
                   while($row = mysqli_fetch_array($vol_1)){

                     echo "<div class=\"col-12 col-md-6 vol1_con\">";
                     echo "<p class=\"box_spec2\">{$row['vol_fname']} {$row['vol_lname']}</p><p class=\"box_spec3\">{$row['vol_position']}</p>";
                     echo "</div>";
                   }
                 }else{
                   echo "<p>{$vol_1}</p>";
                 }
                  ?>
               </div>



               <div class="row" id="vol_2_con">
                 <?php
                 if(!is_string($vol_2)){
                   while($row = mysqli_fetch_array($vol_2)){

                     echo "<div class=\"col-12 col-md-6 vol2_con\">";
                     echo "<p class=\"box_spec2\">{$row['vol2_fname']} {$row['vol2_lname']}</p>";
                     echo "</div>";
                   }
                 }else{
                   echo "<p>{$vol_2}</p>";
                 }
                  ?>
               </div>

            </div>
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

    <div class="d-flex justify-content-center">
      <img src="img/comm/newspaper.svg" class="red_abs_logo" alt="Newspaper Icon">
    </div>


        <section id="comm_section_2"><!--     *     *     *       [start come section 2: News/Events]    *     *     *      -->

             <div class="container-fluid">

               <div class="row">
                 <div class="col-12 nogutter">
                   <img src="img/waves/wave_top.svg" class="wave_top" alt="Wave Top Icon">
                 </div>
                </div>

               <div class="row justify-content-center">
                <div class="col-12 col-lg-10 grey_box spec_box1">


                  <h3 class="box_heading">NEWS &amp; EVENTS </h3>

                  <div id="events_carousel_con" class="row justify-content-center">
                    <div class="col-10 col-md-8">
                  <!-- *** *** *** *** *** *** START BOOTSTRAP CAROUSEL *** *** *** *** *** ***-->
                  <div id="events_carousel" class="carousel slide" data-ride="carousel" data-interval="false">

                      <div class="carousel-inner" role="listbox">

                        <div class="carousel-item active">
                          <img class="d-block img-fluid" src="img/comm/news01.jpg" alt="News/Event #1">
                          <div class="carousel-caption">
                            <h3>We flipped the Tilbury workboat!</h3>
                          </div>
                        </div>

                        <?php
                        if(!is_string($events)){
                          while($row = mysqli_fetch_array($events)){

                            echo "<div class=\"carousel-item\">";
                            echo "<img src=\"img/comm/{$row['event_image']}\" alt=\"Event Image #2\" class=\"d-block img-fluid\">";
                            echo "<div class=\"carousel-caption d-block\">";
                            echo "<h3>{$row['event_title']}</h3>";
                            echo "</div>";
                            echo "</div>";
                          }
                        }else{
                          echo "<p>{$events}</p>";
                        }
                        ?>

                      </div>

                      <div id="control_con">

                      <a class="carousel-control-prev" href="#events_carousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>

                      <ol class="carousel-indicators">
                        <li data-target="#events_carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#events_carousel" data-slide-to="1"></li>
                        <li data-target="#events_carousel" data-slide-to="2"></li>
                        <li data-target="#events_carousel" data-slide-to="3"></li>
                        <li data-target="#events_carousel" data-slide-to="4"></li>
                        <li data-target="#events_carousel" data-slide-to="5"></li>
                      </ol>

                      <a class="carousel-control-next" href="#events_carousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>

                    </div>


                      </div>



                    <!-- *** *** *** *** *** *** END BOOTSTRAP CAROUSEL *** *** *** *** *** ***-->
                  </div>
                </div>




          </div>
          </div>
          </div>

        </section><!--     *     *     *       [end comm section 2]    *     *     *      -->






        <section id="tours_dates_heading_section"><!--     *     *     *       [start comm section3: More to discover]    *     *     *      -->


          <div class="container-fluid">
            <div class="row justify-content-center">
             <div class="col-12 col-lg-11 blue_box">

               <h3 class="box_heading">MORE TO DISCOVER</h3>


             </div>
             </div>
             </div>


                  <div class="container-fluid">
                    <div class="row justify-content-center">
                     <div class="col-12 col-lg-10 grey_box">

                       <div class="row justify-content-center" id="partners_logo_con">
                         <div class="col-7 col-sm-10 col-lg-12">
                           <div class="row justify-content-around">

                         <?php

                         if(!is_string($partners)){
                           while($row = mysqli_fetch_array($partners)){

                             echo "<div class=\"col-12 col-sm-5 col-md-5 col-lg-3 partner_logo big_box_shadow d-flex align-items-center\">
                                    <img src=\"img/comm/{$row['partners_image']}\" alt=\"{$row['partners_name']}\" class=\"img-fluid\">
                                   </div>";
                           }
                         }else{
                           echo "<p>{$partners}</p>";
                         }
                          ?>



                       </div>
                     </div>
                   </div>


                  </div>
                   </div>

                   <div class="row">
                     <div class="col-12 nogutter">
                       <img src="img/waves/wave_bottom.svg" class="wave_bottom" alt="Wave Top Icon">
                     </div>
                   </div>
                   </div>

        </section><!--     *     *     *       [end comm section 3]    *     *     *      -->


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










              <footer class="main_footer" id="comm_footer"><!--     *     *     *       [start footer]    *     *     *      -->

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
                     <li class="nav-item transparent"><a class="nav-link" href="photogallery.php">GALLERY</a></li>
                     <li class="transparent"><p>|</p></li>
                     <li class="nav-item"><a class="nav-link" href="community.php">COMMUNITY</a></li>
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
              <!--.................
              ... END SITE.......
              ..................-->




              <script src="script/about.js"></script>
              <script src="script/navbar.js"></script>
              <script src="script/main.js"></script>
              <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
              <script src="script/bootstrap/bootstrap.js"></script>

              </body>

              </html>
