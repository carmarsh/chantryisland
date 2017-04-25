<?php

ini_set('display_errors',1);
error_reporting(E_ALL);

require_once("admin/phpscripts/init.php");

$tbl = "tbl_tours";
$b_para1 = getAll($tbl);
$b_phone = getAll($tbl);
$b_phone2 = getAll($tbl);
$b_cost = getAll($tbl);
$b_cost2 = getAll($tbl);
$b_note = getAll($tbl);
$b_note2 = getAll($tbl);
$b_image = getAll($tbl);
$d_image = getAll($tbl);
$d_para1 = getAll($tbl);
$d_para2 = getAll($tbl);
$d_para3 = getAll($tbl);
$d_note = getAll($tbl);
$w_para1 = getAll($tbl);
$da_para1 = getAll($tbl);




$tbl_dates = "tbl_tours_dates";
$month1 = "May";
$month2 = "June";
$month3 = "July";
$month4 = "August";
$month5 = "September";
$d_may = getMonth($tbl_dates, $month1);
$d_june = getMonth($tbl_dates, $month2);
$d_july = getMonth($tbl_dates, $month3);
$d_august = getMonth($tbl_dates, $month4);
$d_sept = getMonth($tbl_dates, $month5);

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

     <title>Chantry Island Tours - Book a Tour</title>

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

   <header class="main_header" id="tours_header"> <!--     *     *     *       [start HEADER]    *     *     *      -->
     <h2 class="sr-only"> Home Navigation</h2>

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
       <h2 class="sr-only"> Main Navigation</h2>

       <button class="navbar-toggler navbar-toggler-right hamburger-button" type="button" data-toggle="collapse"
       data-target=".nav_content" aria-controls="nav_content" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
       </button>

       <div class="collapse navbar-collapse nav_content">
         <ul class="navbar-nav mr-auto">
           <li class="nav-item hidden-lg-up"><a class="nav-link" href="index.php">HOME</a></li>

           <li class="nav-item transparent"><a class="nav-link" href="tours.php">TOURS</a></li>

           <li class="hidden-md-down"><p>|</p></li>

           <li class="nav-item"><a class="nav-link" href="about.php">ABOUT</a></li>

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

   <div class="row justify-content-center">
     <div class="col-10 col-sm-6 col-md-4 col-lg-4">
     <div id="home_title_box">
     <h2>You're invited to discover<br><span class="home_title">CHANTRY ISLAND</h2>
     </div>
     </div>
   </div>



   </div><!-- end header container -->

   </header><!--     *     *     *       [end HEADER]    *     *     *      -->


   <section id="tours_section_1"><!--     *     *     *       [start tours section 1: Booking your tour]    *     *     *      -->

        <div class="container-fluid">
          <div class="row justify-content-center">
           <div class="col-12 col-lg-8 red_box">

              <h3 class="box_heading">BOOKING YOUR TOUR</h3>

              <!-- booking Paragraph #1 -->
              <div class="row">
              <div class="col-12">
              <?php
              if(!is_string($b_para1)){
                while($row = mysqli_fetch_array($b_para1)){

                  echo "<p class=\"box_para\">{$row['tours_booking_para1']}</p>";
                }
              }else{
                echo "<p>{$b_para1}</p>";
              }
               ?>
                </div>
                </div>
              <!-- end booking Paragraph #1 -->

              <!-- booking phone -->
              <div class="row">
              <div class="col-12">
              <?php
              if(!is_string($b_phone)){
                while($row = mysqli_fetch_array($b_phone)){

                  echo "<a href=\"tel:{$row['tours_booking_phone']}\" class=\"text_link\"><p class=\"box_spec1\">{$row['tours_booking_phone']}</p></a>";
                }
              }else{
                echo "<p>{$b_phone}</p>";
              }
               ?>
                </div>
                </div>
              <!-- end booking phone -->

              <div class="row justify-content-center">
              <div class="col-3 col-sm-2 align-self-center">
                <div class="d-flex justify-content-center">
                  <img src="img/tours/phone.svg" alt="Phone Icon" class="icon_padding">
               </div>
              </div>
              </div>

              <div class="row">
              <div class="col-12">
                <div class="d-flex justify-content-center">
                <a href="#tours_dates_sched_section" class="text_link"><p class="box_spec2">see tour schedule</p></a>
                </div>
                </div>
                </div>

                <!-- booking Cost -->
                <div class="row hidden-md-down">
                <div class="col-12">
                <?php
                if(!is_string($b_cost2)){
                  while($row = mysqli_fetch_array($b_cost2)){

                    echo "<p class=\"box_para_ni\"><b>Cost:</b> {$row['tours_booking_cost']}</p>";
                  }
                }else{
                  echo "<p>{$b_cost2}</p>";
                }
                 ?>
                  </div>
                  </div>
                <!-- end booking Cost -->

                <!-- booking Note -->
                <div class="row hidden-md-down">
                <div class="col-12">
                <?php
                if(!is_string($b_note2)){
                  while($row = mysqli_fetch_array($b_note2)){

                    echo "<p class=\"box_para_ni\"><b>Note:</b> {$row['tours_booking_note']}</p>";
                  }
                }else{
                  echo "<p>{$b_note2}</p>";
                }
                 ?>
                  </div>
                  </div>
                <!-- end booking Note -->

        </div>
         </div>
         </div>
   </section><!--     *     *     *       [end tours section 1]    *     *     *      -->



 <section id="tours_image1_section" class="hidden-md-down"><!--     *     *     *       [start tours image1 section]    *     *     *      -->
 <h2 class="sr-only">Tour Image 1</h2>
    <div class="container-fluid">
    <div class="row justify-content-center">
    <div class="col-12 col-lg-7 nogutter">


   <?php
   if(!is_string($b_image)){
     while($row = mysqli_fetch_array($b_image)){

       echo "<img src=\"img/tours/{$row['tours_booking_image']}\" class=\"big_box_shadow img-fluid\" alt=\"Tours Booking Image\">";
     }
   }else{
     echo "<p>{$b_image}</p>";
   }
    ?>


   </div>
   </div>
   </div>

    </section><!--     *     *     *       [end tours image 1 section]    *     *     *      -->


    <section id="tours_mobile_cost_section" class="hidden-md-up"><!--     *     *     *       [start tours mobile cost section]    *     *     *      -->
      <h2 class="sr-only">Tours Pricing</h2>
         <div class="container-fluid">
           <div class="row justify-content-center">
            <div class="col-12 col-lg-8 white_box">

                 <!-- booking Cost -->
                 <div class="row">
                 <div class="col-12">
                 <?php
                 if(!is_string($b_cost)){
                   while($row = mysqli_fetch_array($b_cost)){

                     echo "<p class=\"box_para_ni\"><b>Cost:</b> {$row['tours_booking_cost']}</p>";
                   }
                 }else{
                   echo "<p>{$b_cost}</p>";
                 }
                  ?>
                   </div>
                   </div>
                 <!-- end booking Cost -->

                 <!-- booking Note -->
                 <div class="row">
                 <div class="col-12">
                 <?php
                 if(!is_string($b_note)){
                   while($row = mysqli_fetch_array($b_note)){

                     echo "<p class=\"box_para_ni\"><b>Note:</b> {$row['tours_booking_note']}</p>";
                   }
                 }else{
                   echo "<p>{$b_note}</p>";
                 }
                  ?>
                   </div>
                   </div>
                 <!-- end booking Note -->

         </div>
          </div>
          </div>
    </section><!--     *     *     *       [end tours mobile cost section]    *     *     *      -->


    <section id="tours_image2_section" class="hidden-md-down"><!--     *     *     *       [start tours image2 section]    *     *     *      -->
      <h2 class="sr-only">Tour Image 2</h2>
       <div class="container-fluid">
       <div class="row justify-content-center">
       <div class="col-11 nogutter blue_box">

        <div class="d-flex justify-content-center">
      <?php
      if(!is_string($d_image)){
        while($row = mysqli_fetch_array($d_image)){

          echo "<img src=\"img/tours/{$row['tours_details_image']}\" class=\"img-fluid img_maxw\" alt=\"Tours Details Image\">";
        }
      }else{
        echo "<p>{$d_image}</p>";
      }
       ?>
    </div>


      </div>
      </div>
      </div>

    </section><!--     *     *     *       [end tours image 2 section]    *     *     *      -->



    <section id="tours_section_2"><!--     *     *     *       [start tours section 2: Tour Details]    *     *     *      -->

         <div class="container-fluid">
           <div class="row justify-content-center">
            <div class="col-12 col-lg-9 grey_box">

               <h3 class="box_heading">TOUR DETAILS</h3>

               <!-- deatils Paragraph #1 -->
               <div class="row">
               <div class="col-12">
               <?php
               if(!is_string($d_para1)){
                 while($row = mysqli_fetch_array($d_para1)){

                   echo "<p class=\"box_para\">{$row['tours_details_para1']}</p>";
                 }
               }else{
                 echo "<p>{$d_para1}</p>";
               }
                ?>
                 </div>
                 </div>
               <!-- end booking Paragraph #1 -->


               <div class="row justify-content-center">

               <div class="col-4 col-sm-3 col-md-2 col-lg-3 flex-lg-last align-self-center">
                 <div class="d-flex justify-content-center">
                <img src="img/tours/boat.svg" class="img-fluid box_icon" alt="Boat Icon">
                </div>
               </div>

               <!-- details Paragraph #2 -->
               <div class="col-12 flex-lg-first">
               <?php
               if(!is_string($d_para2)){
                 while($row = mysqli_fetch_array($d_para2)){

                   echo "<p class=\"box_para\">{$row['tours_details_para2']}</p>";
                 }
               }else{
                 echo "<p>{$d_para2}</p>";
               }
                ?>
                 </div>
                 </div>
               <!-- end booking Paragraph #2 -->

               <div class="row justify-content-center">
               <div class="col-10 align-self-center">
                 <div class="d-flex justify-content-center">
                <img src="img/tours/waves.svg" class="img-fluid box_icon" alt="Waves Icon">
                </div>
               </div>
               </div>

               <!-- deatils Paragraph #3 -->
               <div class="row">
               <div class="col-12">
               <?php
               if(!is_string($d_para3)){
                 while($row = mysqli_fetch_array($d_para3)){

                   echo "<p class=\"box_para\">{$row['tours_details_para3']}</p>";
                 }
               }else{
                 echo "<p>{$d_para3}</p>";
               }
                ?>
                 </div>
                 </div>
               <!-- end booking Paragraph #3 -->

               <!-- deatils Note -->
               <div class="row">
               <div class="col-12">
               <?php
               if(!is_string($d_note)){
                 while($row = mysqli_fetch_array($d_note)){

                   echo "<p class=\"box_para_ni italic\">*{$row['tours_details_note']}*</p>";
                 }
               }else{
                 echo "<p>{$d_note}</p>";
               }
                ?>
                 </div>
                 </div>
               <!-- end booking Note -->



         </div>
          </div>

          <div class="row">
            <div class="col-12 nogutter">
              <img src="img/waves/wave_bottom.svg" class="wave_bottom" alt="Wave Top Icon">
            </div>
          </div>

          </div>

    </section><!--     *     *     *       [end tours section 2]    *     *     *      -->

<div class="d-flex justify-content-center">
  <img src="img/logos/circleLogoRed.svg" class="red_abs_logo" alt="Red Logo">
</div>


    <section id="tours_section_3"><!--     *     *     *       [start tours section 3: When/Where]    *     *     *      -->

         <div class="container-fluid">

           <div class="row">
             <div class="col-12 nogutter">
               <img src="img/waves/wave_top.svg" class="wave_top" alt="Wave Top Icon">
             </div>
            </div>

           <div class="row justify-content-center">
            <div class="col-12 col-lg-9 grey_box spec_box1">


              <h3 class="box_heading">WHERE &amp; WHEN TO ARRIVE</h3>

              <!-- deatils Paragraph #1 -->
              <div class="row">
              <div class="col-12">
              <?php
              if(!is_string($w_para1)){
                while($row = mysqli_fetch_array($w_para1)){

                  echo "<p class=\"box_para\">{$row['tours_where_para1']}</p>";
                }
              }else{
                echo "<p>{$w_para1}</p>";
              }
               ?>
                </div>
                </div>
              <!-- end booking Paragraph #1 -->

      </div>
      </div>
      </div>

    </section><!--     *     *     *       [end tours section 3]    *     *     *      -->




<section id="tours_dates_heading_section"><!--     *     *     *       [start tours dates heading section]    *     *     *      -->
  <div class="container-fluid">
    <div class="row justify-content-center">
     <div class="col-12 col-lg-11 blue_box">

       <h3 class="box_heading">TOUR DATES</h3>

       <!-- tour dates info -->
       <div class="row">
       <div class="col-12">

       <?php
       if(!is_string($da_para1)){
         while($row = mysqli_fetch_array($da_para1)){

           echo "<p class=\"box_para\">{$row['tours_dates_para1']}</p>";
         }
       }else{
         echo "<p>{$da_para1}</p>";
       }
        ?>

         </div>
         </div>
       <!-- end tour dates info -->


     </div>
     </div>
     </div>
</section><!--     *     *     *       [end tours dates heading section]    *     *     *      -->



<section id="tours_dates_sched_section"><!--     *     *     *       [start tours dates schedule section]    *     *     *      -->
<h2 class="sr-only">Browse Schedule</h2>
  <div class="container-fluid">
    <div class="row justify-content-center">
     <div class="col-10 col-md-11 col-lg-9 big_box_shadow white_box">

       <div class="d-md-flex justify-content-md-center" id="dates_button_con">
       <button id="may" class="blue_book_but">MAY</button>
       <button id="june" class="blue_book_but">JUNE</button>
       <button id="july" class="blue_book_but">JULY</button>
       <button id="august" class="blue_book_but">AUGUST</button>
       <button id="sept" class="blue_book_but">SEPTEMBER</button>
      </div>

       <!-- tour dates info -->
       <div class="row justify-content-center">
       <div class="col-12 col-md-10 col-lg-9">

         <!--         start MAY table       -->
         <div class="table_month" id="table_may">
         <table>
       <?php
       if(!is_string($d_may)){
         while($row = mysqli_fetch_array($d_may)){

           echo "<tr>";
           echo "<td class=\"day\">{$row['dates_day']}</td>";
           echo "<td class=\"time\">{$row['dates_time']}</td>";
           echo "</tr>";

         }
       }else{
         echo "<p>{$d_may}</p>";
       }
        ?>
      </table>
    </div>
      <!--         end MAY table          -->


             <!--         start JUNE table       -->
             <div class="table_month" id="table_june">
           <table>
         <?php
         if(!is_string($d_june)){
           while($row = mysqli_fetch_array($d_june)){

             echo "<tr>";
             echo "<td>{$row['dates_day']}</td>";
             echo "<td class=\"time\">{$row['dates_time']}</td>";
             echo "</tr>";

           }
         }else{
           echo "<p>{$d_june}</p>";
         }
          ?>
        </table>
        </div>
        <!--         end JUNE table          -->


           <!--         start JULY table       -->
           <div class="table_month" id="table_july">
                <table>
              <?php
              if(!is_string($d_july)){
                while($row = mysqli_fetch_array($d_july)){

                  echo "<tr>";
                  echo "<td>{$row['dates_day']}</td>";
                  echo "<td class=\"time\">{$row['dates_time']}</td>";
                  echo "</tr>";

                }
              }else{
                echo "<p>{$d_july}</p>";
              }
               ?>
             </table>
             </div>
             <!--         end JULY table          -->


            <!--         start AUGUST table          -->
            <div class="table_month" id="table_august">
             <table>
           <?php
           if(!is_string($d_august)){
             while($row = mysqli_fetch_array($d_august)){

               echo "<tr class=\"august\">";
               echo "<td>{$row['dates_day']}</td>";
               echo "<td class=\"time\">{$row['dates_time']}</td>";
               echo "</tr>";

             }
           }else{
             echo "<p>{$d_august}</p>";
           }
            ?>
          </table>
          </div>
          <!--         end AUGUST table          -->


          <!--         start sept table          -->
          <div class="table_month" id="table_sept">
           <table>
         <?php
         if(!is_string($d_sept)){
           while($row = mysqli_fetch_array($d_sept)){

             echo "<tr>";
             echo "<td>{$row['dates_day']}</td>";
             echo "<td class=\"time\">{$row['dates_time']}</td>";
             echo "</tr>";

           }
         }else{
           echo "<p>{$d_sept}</p>";
         }
          ?>
        </table>
        </div>
        <!--         end sept table          -->


         </div>
         </div>
       <!-- end tour dates info -->






     </div>
     </div>
     </div>
</section><!--     *     *     *       [end tours dates schedule section]    *     *     *      -->

<div class="container">
<div class="row d-flex justify-content-center">
<a href="#tours_section_1"><button class="red_book_but">BOOK A TOUR</button></a>
</div>
</div>










      <footer class="main_footer" id="tours_footer"><!--     *     *     *       [start footer]    *     *     *      -->

      <div class="container-fluid">
        <div class="row align-items-center">

          <div class="hidden-md-down col-lg-1 transparent logo_con">
          <img src="img/logos/circleLogo.svg" alt="Small Chantry Islands Logo">
         </div>

        <div class="hidden-md-down col-lg-6 nav_con">
          <ul>
             <li class="nav-item transparent"><a class="nav-link" href="index.php">HOME</a></li>
             <li class="transparent"><p>|</p></li>
             <li class="nav-item"><a class="nav-link" href="tours.php">TOURS</a></li>
             <li class="transparent"><p>|</p></li>
             <li class="nav-item transparent"><a class="nav-link" href="about.php">ABOUT</a></li>
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

      <!--.................
      ... END SITE.......
      ..................-->




      <script src="script/navbar.js"></script>
      <script src="script/tours.js"></script>
      <script src="script/main.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
      <script src="script/bootstrap/bootstrap.js"></script>

      </body>

      </html>
