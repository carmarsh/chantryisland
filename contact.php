<?php

ini_set('display_errors',1);
error_reporting(E_ALL);

require_once("admin/phpscripts/init.php");

$tbl1 = "tbl_tours";
$tbl2 = "tbl_donate";

$tbl3 = "tbl_contact";

$phone = getAll($tbl1);
$address = getAll($tbl2);

$con_para1 = getAll($tbl3);

//info for grabbing phone #
$tbl_tours = "tbl_tours";
$phone = getAll($tbl_tours);


if(isset($_POST['contact_form_submit'])) {
  $name = $_POST['user_name'];
  $email = $_POST['user_email'];
  $subject = $_POST['user_subject'];
  $message = $_POST['user_message'];

  echo "submit clicked";
  echo $name;
  echo $email;
  echo $subject;
  echo $message;

  $to = 'carly.marsh@hotmail.com';
  $headers = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers);


}


 ?>


  <!DOCTYPE HTML>
  <HTML lang="en">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <title>Chantry Island Tours - Contact Us</title>

      <link href="css/bootstrap/bootstrap-flex.css" rel="stylesheet" type="text/css">
      <link href="css/bootstrap/bootstrap-grid.css" rel="stylesheet" type="text/css">
      <link href="css/bootstrap/bootstrap-reboot.css" rel="stylesheet" type="text/css">
      <link href="css/bootstrap/bootstrap.css" rel="stylesheet" type="text/css">
      <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">

      <link href="css/normalize.css" rel="stylesheet" type="text/css">
      <link href="css/chanty.css" rel="stylesheet" type="text/css">


          <script src="script/greensock/TweenMax.min.js"></script>
          <script src="script/greensock/TimelineMax.min.js"></script>
          <script src="script/greensock/ScrollToPlugin.min.js"></script>
          <script src="script/greensock/TweenLite.min.js"></script>

          <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAC2AMIAPFPdzHROkYemXIsbxdHQxjBnwc"></script>


    </head>

  <body>

    <!--.................
    ... BEGIN SITE.......
    ..................-->

    <header class="main_header" id="contact_header"> <!--     *     *     *       [start HEADER]    *     *     *      -->
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

            <li class="nav-item"><a class="nav-link" href="community.php">COMMUNITY</a></li>

             <li class="hidden-md-down"><p>|</p></li>

            <li class="nav-item"><a class="nav-link" href="donate.php">DONATE</a></li>

            <li class="hidden-md-down"><p>|</p></li>

            <li class="nav-item transparent"><a class="nav-link" href="contact.php">CONTACT</a></li>
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



        <section id="contact_section_1"><!--     *     *     *       [start contact section 1]    *     *     *      -->
             <div class="container-fluid">
               <div class="row justify-content-center">
                <div class="col-12 col-lg-10 grey_box mtop_box">



                   <h3 class="box_heading" id="vol_heading">CONTACT US</h3>

                   <!-- contact phone -->
                   <div class="row">
                   <div class="col-12">
                   <?php
                   if(!is_string($phone)){
                     while($row = mysqli_fetch_array($phone)){

                       echo "<a href=\"tel:{$row['tours_booking_phone']}\" class=\"text_link\"><p class=\"box_spec1\">{$row['tours_booking_phone']}</p></a>";
                     }
                   }else{
                     echo "<p>{$phone}</p>";
                   }
                    ?>
                     </div>
                     </div>
                   <!-- end contact phone -->

                   <div class="row justify-content-center">
                   <div class="col-4 col-sm-2 col-md-2 align-self-center">
                    <img src="img/contact/map.svg" alt="Map Icon" class="img-fluid box_icon">
                   </div>
                   </div>

<img src="img/contact/path.png" alt="Path Icon" class="hidden-md-down" id="path_icon">

                   <!-- start contact address -->
                   <div class="row justify-content-center">
                     <div class="col-12">
                     <?php
                     if(!is_string($address)){
                       while($row = mysqli_fetch_array($address)){

                         echo "<p class=\"box_spec5\">{$row['donate_address1']}</p>";
                         echo "<p class=\"box_spec5\">{$row['donate_address2']}</p>";
                         echo "<p class=\"box_spec5\">{$row['donate_address3']}</p>";
                         echo "<p class=\"box_spec5\">{$row['donate_address4']}</p>";
                       }
                     }else{
                       echo "<p>{$address}</p>";
                     }
                      ?>

                    </div>
                  </div>
                   <!-- end contact address -->



                   <div class="row justify-content-center">
                   <div class="col-3 col-sm-2 col-md-2 align-self-center">
                    <img src="img/contact/location.svg" alt="Location Icon" class="img-fluid box_icon" id="location_icon">
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

        <section id="directions_box">
          <div class="container-fluid">
            <div class="row justify-content-center">
             <div class="col-9 col-lg-8 blue_box">

                <h3 class="box_heading">DIRECTIONS</h3>


                <!-- directions Paragraph #1 -->
                <div class="row dpara1">
                <div class="col-12">
                <?php
                if(!is_string($con_para1)){
                  while($row = mysqli_fetch_array($con_para1)){

                    echo "<p class=\"box_para\">{$row['contact_para1']}</p>";
                  }
                }else{
                  echo "<p>{$con_para1}</p>";
                }
                 ?>
                  </div>
                  </div>
                <!-- end directions Paragraph #1 -->

                <div class="d-flex justify-content-center hidden-lg-up google_link">
                  <a target="_blank" href="https://www.google.ca/maps/place/Chantry+Island/@44.4899069,-81.4085971,16z/data=!3m1!4b1!4m5!3m4!1s0x8829ce5f8c20f7df:0x1401a4a7bb9f19b6!8m2!3d44.490083!4d-81.4038577">open google maps</a>
                </div>



          </div>
           </div>
           </div>

        </section>


        <section id="contact_map_section" class="hidden-md-down">
          <h2 class="sr-only">Map of Chantry Island</h2>
          <div class="row justify-content-center">
           <div class="col-lg-6">

             <div class="preload-wrapper">
             <i class="fa fa-spinner fa-spin"></i>
             <span>Loading map, please wait...</span>
             </div>

             <div class="map-wrapper big_box_shadow"></div>
             <!-- <div class="directions-wrapper"></div> -->

           </div>
           </div>

        </section>


        <section id="contact_section_2"><!--     *     *     *       [start contact section2]    *     *     *      -->

             <div class="container-fluid">

               <div class="row">
                 <div class="col-12 nogutter">
                   <img src="img/waves/wave_top.svg" class="wave_top" alt="Wave Top Icon">
                 </div>
                </div>

               <div class="row justify-content-center">
                <div class="col-12 col-lg-11 red_box spec_box1">


                  <h3 class="box_heading">SEND US A MESSAGE</h3>

                  <div class="row justify-content-center">
                  <div class="col-11 col-md-10 col-lg-8">
                  <form  action="contact.php" method="post" id="contact_form">

                    <label>To:</label>
                    <textarea rows="1" name="owner_email" type="text">chantryisland@bmts.com</textarea>

                    <label>Name:</label>
                    <input type="text" name="user_name">

                    <label>Email:</label>
                    <input type="email" name="user_email">

                    <label>Subject:</label>
                    <input type="text" name="user_subject">

                    <label>Message:</label>
                    <textarea rows="5" name="user_message" type="text"></textarea>

                    <div class="row justify-content-center">
                    <div class="col-5 col-md-3">

                    <input type="submit" name="contact_form_submit" value="SEND" id="contact_send_message_button">
                    </div>
                    </div>

                  </form>
                </div>
              </div>



                  <div class="row justify-content-center">
                  <div class="col-5 col-sm-4 col-md-3">
                      <img src="img/contact/bottle.png" class="img-fluid icon_padding" alt="Bottle Icon">
                  </div>
                  </div>






          </div>
          </div>
          </div>

        </section><!--     *     *     *       [end comm section 2]    *     *     *      -->















    <footer class="main_footer" id="contact_footer"><!--     *     *     *       [start footer]    *     *     *      -->

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
           <li class="nav-item transparent"><a class="nav-link" href="community.php">COMMUNITY</a></li>
           <li class="transparent"><p>|</p></li>
           <li class="nav-item transparent"><a class="nav-link" href="donate.php">DONATE</a></li>
           <li class="transparent"><p>|</p></li>
           <li class="nav-item"><a class="nav-link" href="contact.php">CONTACT</a></li>
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
    <script src="script/location.js"></script>
    <script src="script/main.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="script/bootstrap/bootstrap.js"></script>

    </body>

    </html>
