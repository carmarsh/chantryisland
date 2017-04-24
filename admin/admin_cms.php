<?php  //index page variables

require_once('phpscripts/init.php');
ini_set('display_errors',1);
error_reporting(E_ALL);

confirm_logged_in();

//index variables
$index_tbl = "tbl_index";
$index_para = getAll($index_tbl);
$index_vid = getAll($index_tbl);

if(isset($_POST['index_submit'])) {
$para1 = $_POST['index_para'];
$uploadPara = addPara($para1);
$message = $uploadPara;
}

if(isset($_POST['index_video_submit'])) {
$video = $_FILES['index_vid']['name'];
$uploadVideo= addVideo($video);
$message = $uploadVideo;

}

//tours page variables
$tours_tbl = "tbl_tours";
$b_para1 = getAll($tours_tbl);
$b_phone = getAll($tours_tbl);
$b_cost = getAll($tours_tbl);
$b_note = getAll($tours_tbl);
$b_image = getAll($tours_tbl);
$d_image = getAll($tours_tbl);
$d_para1 = getAll($tours_tbl);
$d_para2 = getAll($tours_tbl);
$d_para3 = getAll($tours_tbl);
$d_note = getAll($tours_tbl);
$w_para1 = getAll($tours_tbl);

if(isset($_POST['tours_submit'])) {
  $b_para1 = $_POST['b_para1'];
  $phone = $_POST['b_phone'];
  $cost = $_POST['b_cost'];
  $note = $_POST['b_note'];
  $image1 = $_FILES['tours_image1']['name'];
  $image2 = $_FILES['tours_image2']['name'];
  $d_para1 = $_POST['d_para1'];
  $d_para2 = $_POST['d_para2'];
  $d_para3 = $_POST['d_para3'];
  $d_note = $_POST['d_note'];
  $w_para1 = $_POST['w_para1'];
  $updateTours = updateTours($b_para1, $phone, $cost, $note, $image1, $image2, $d_para1, $d_para2, $d_para3, $d_note, $w_para1);
  $message = $updateTours;
}


//gallery variables
$gallery_tbl = "tbl_gallery";
$images = getAll($gallery_tbl);

if(isset($_POST['gallery_submit'])) {
$image = $_FILES['gallery_image']['name'];
$thumb = "thumb_".$image;
$desc = $_POST['gallery_desc'];

$uploadImage = addImage($image, $thumb, $desc);
$message = $uploadImage;
}

//about VARIABLES
$about_tbl = "tbl_about";
$a_para1 = getAll($about_tbl);
$a_image1 = getAll($about_tbl);
$a_para2 = getAll($about_tbl);
$a_para3 = getAll($about_tbl);
$a_image2 = getAll($about_tbl);

$h_para1 = getAll($about_tbl);
$h_para2 = getAll($about_tbl);

$bi_para1 = getAll($about_tbl);
$bi_image1 = getAll($about_tbl);

$l_para1 = getAll($about_tbl);
$l_image1 = getAll($about_tbl);
$l_image2 = getAll($about_tbl);
$l_binfo = getAll($about_tbl);
$l_ainfo = getAll($about_tbl);

$lastpara = getAll($about_tbl);

if(isset($_POST['about_submit'])) {

  $a_para1 = $_POST['a_para1'];
  $a_image1 =$_FILES['a_image1']['name'];
  $a_para2 = $_POST['a_para2'];
  $a_para3 = $_POST['a_para3'];

  $a_image2 = $_FILES['a_image2']['name'];
  $h_para1 = $_POST['h_para1'];
  $h_para2 = $_POST['h_para2'];
  $bi_para1 = $_POST['bi_para1'];
  $bi_image1 = $_FILES['bi_image1']['name'];
  $l_para1 = $_POST['l_para1'];

  $l_image1 = $_FILES['l_image1']['name'];

  $l_binfo = $_POST['l_binfo'];

  $l_image2 = $_FILES['l_image2']['name'];
  $l_ainfo = $_POST['l_ainfo'];

  $lastpara = $_POST['lastpara'];
  $updateAbout = updateAbout($a_para1, $a_image1, $a_para2, $a_para3, $a_image2, $h_para1, $h_para2, $bi_para1, $bi_image1, $l_para1, $l_image1, $l_image2, $l_ainfo, $l_binfo, $lastpara);
  $message = $updateAbout;

}



//COMMUNTY VARIABLES
$comm_tbl1 = "tbl_community";
$comm_tbl2 = "tbl_community_events";
$comm_tbl3 = "tbl_community_partners";
$comm_tbl4 = "tbl_community_volunteers";
$comm_tbl5 = "tbl_community_volunteers2";

$c_vol_para = getAll($comm_tbl1);

$c_events = getAll($comm_tbl2);

$partners = getAll($comm_tbl3);

$vol1 = getAll($comm_tbl4);
$vol2 = getAll($comm_tbl5);

if(isset($_POST['comm_vol_para_submit'])) {
$v_para = $_POST['vol_para'];
$updateVPara = addVPara($v_para);
$message = $updateVPara;
}

if(isset($_POST['vol_submit'])) {
      $fname = $_POST['vol_fname'];
      $lname = $_POST['vol_lname'];
      $pos = $_POST['vol_position'];
      $fname2 = $_POST['vol2_fname'];
      $lname2 = $_POST['vol2_lname'];
      $addVol = addVol($fname, $lname, $pos, $fname2, $lname2);
      $message = $addVol;
}

if(isset($_POST['event_submit'])) {
    $title = $_POST['event_title'];
    $image = $_FILES['event_image']['name'];
    $date = $_POST['event_date'];
    $info = $_POST['event_info'];

    $uploadEvent = addEvent($title, $image, $date, $info);
    $message = $uploadEvent;
}

if(isset($_POST['partners_submit'])) {
       $image = $_FILES['partners_image']['name'];
       $name = $_POST['partners_name'];
       $uploadPartner = addPartner($image, $name);
       $message = $uploadPartner;
}


//DONATE PAGE variables
$do_tbl = "tbl_donate";
$do_para1 = getAll($do_tbl);
$do_add = getAll($do_tbl);

$do_note = getAll($do_tbl);
$do_para2 = getAll($do_tbl);

if(isset($_POST['donate_submit'])) {
       $para1 = $_POST['do_para1'];
       $add1 = $_POST['do_add1'];
       $add2 = $_POST['do_add2'];
       $add3 = $_POST['do_add3'];
       $add4 = $_POST['do_add4'];
       $note = $_POST['do_note'];
       $para2 = $_POST['do_para2'];
       $updateDonate = updateDonate($para1, $add1, $add2, $add3, $add4, $note, $para2);
       $message = $messageDonate;
}

//CONTACT PAGE variables
$b_phone2 = getAll($tours_tbl); // getting info from tours table
$do_add2 = getAll($do_tbl);

$co_tbl = "tbl_contact";
$co_para1 = getAll($co_tbl);

if(isset($_POST['contact_submit'])) {
$phone = $_POST['b_phone'];
$add1 = $_POST['do_add1'];
$add2 = $_POST['do_add2'];
$add3 = $_POST['do_add3'];
$add4 = $_POST['do_add4'];
$para1 = $_POST['co_para1'];

$updateContact = updateContact($phone, $add1, $add2, $add3, $add4, $para1);
$message = $updateContact;
}



//CREATE USER variables
if(isset($_POST['submit'])) {
  // echo "submit clicked";
  $firstname = trim($_POST['firstname']);
  $lastname = trim($_POST['lastname']);
  $email = trim($_POST['email']);
  $username = trim($_POST['username']);
  $level = $_POST['level_list'];

  if(empty($level)) {
    $message = "please select user level";
  }else {
    $result = createUser($firstname, $lastname, $email, $username, $level);
    $message = $result;
  }
}

//edit USER variables
$id = $_SESSION['users_ID'];

$pop_form = getUser($id);

if(isset($_POST['submit'])){
  $firstname = trim($_POST['firstname']);
  $lastname = trim($_POST['lastname']);
  $username = trim($_POST['username']);
  $password = trim($_POST['password']);

  $result = editUser($id, $firstname, $lastname, $username, $password);
  $message = $result;

}

//delete user variables
$tbl_users = "tbl_users";
$users = getAll($tbl_users);

?>


   <!DOCTYPE HTML>
   <HTML lang="en">
     <head>
       <meta charset="utf-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1">

       <title>Chantry Island Tours - Content Management</title>

       <link href="../css/bootstrap/bootstrap-flex.css" rel="stylesheet" type="text/css">
       <link href="../css/bootstrap/bootstrap-grid.css" rel="stylesheet" type="text/css">
       <link href="../css/bootstrap/bootstrap-reboot.css" rel="stylesheet" type="text/css">
       <link href="../css/bootstrap/bootstrap.css" rel="stylesheet" type="text/css">

       <link href="../css/normalize.css" rel="stylesheet" type="text/css">
       <link href="../css/chanty.css" rel="stylesheet" type="text/css">

       <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">



           <script src="../script/greensock/TweenMax.min.js"></script>
           <script src="../script/greensock/TimelineMax.min.js"></script>
           <script src="../script/greensock/ScrollToPlugin.min.js"></script>
           <script src="../script/greensock/TweenLite.min.js"></script>

     </head>

   <body>

     <!--.................
     ... BEGIN SITE.......
     ..................-->
  <header>
    <h1 class="sr-only">Content Management Page(admins only)</h1>
<div class="container-fluid">
<div class="row justify-content-center">
<div class="col-12 red_box cms_header">

  <?php if(!empty($message)){echo $message;}
  ?>

  <h1 class="box_heading"><?php echo $greeting ?> <?php echo $_SESSION['users_NAME'];?></h1>

  <h1 class="box_heading"> Welcome to the Chantry Island Admin Panel</h1>

<div class="d-flex justify-content-center">
  <a href="phpscripts/caller.php?caller_id=logout" class="blue_book_but">Log Out</a>
</div>
<div class="d-flex justify-content-center">
  <p class="box_para italic">last login: <?php echo $_SESSION['users_LASTLOGIN'];?></p>
</div>


</div>
</div>
</div>
</header>

<div class="d-flex justify-content-center">
  <p class="box_heading">Select a page to update/change:</p>
</div>








<div class="container">



<!-- HOMEPAGE EDIT AREA         -->

<div class="row">
<div class="col-12 page_edits_title_con" id="home_edits_title">

  <p class="page_title">Home Page</p>

<div class="page_button_con">
  <button class="exp_button" data-box="0"><i class="fa fa-arrow-circle-right fa-2x"></i></button>
  <button class="less_button" data-box="0"><i class="fa fa-arrow-circle-down fa-2x"></i></button>
</div>

</div>



<div class="col-12 page_edits_con" id="home_edits_con" data-box="0">

<div class="d-flex justify-content-center">
<form class="form1" action="admin_cms.php" method="post" enctype="multipart/form-data">

<label class="label1">Update Opening Paragraph:</label>
<textarea name="index_para" rows="8" cols="100" class="textarea1" id="indexform_1">
  <?php

  if(!is_string($index_para)){
    while($row = mysqli_fetch_array($index_para)){

      echo "{$row['index_para1']}";
    }
  }
   ?>
</textarea>
<input type="submit" name="index_submit" class="input1" value="Update Paragraph">
</form>
</div>


<div class="d-flex justify-content-center">
<form class="form2" action="admin_cms.php" method="post" enctype="multipart/form-data">
  <label>Upload/Change Video:</label>
  <?php
  if(!is_string($index_vid)){
    while($row = mysqli_fetch_array($index_vid)){
      echo "<p class=\"formpara1\"><b>Current Video:</b><span class=\"form_specp\"> {$row['index_video']} </span></p>";
    }
  }
   ?>

<input type="file" name="index_vid" value="" size="32">
<input type="submit" name="index_video_submit" value="Update Video">
</form>
</div>


</div>






</div>


<!--  END HOMEPAGE EDIT AREA         -->









<!--  START TOURS EDIT AREA         -->
<div class="row">
<div class="col-12 page_edits_title_con" id="tours_edits_title">

  <p class="page_title">Tours Page</p>

  <div class="page_button_con">
  <button class="exp_button" data-box="1"><i class="fa fa-arrow-circle-right fa-2x"></i></button>
  <button class="less_button" data-box="1"><i class="fa fa-arrow-circle-down fa-2x"></i></button>
</div>

</div>


<div class="col-12 page_edits_con" id="tours_edits_con" data-box="1">
    <div class="d-flex justify-content-center">

      <form action="admin_cms.php" class="form1" method="post" enctype="multipart/form-data">

        <h3 class="form_heading1">Booking Your Tour Section:</h3>

        <label>Update 1st Paragraph:</label>
        <textarea name="b_para1" rows="5" cols="100">
          <?php

          if(!is_string($b_para1)){
            while($row = mysqli_fetch_array($b_para1)){

              echo "{$row['tours_booking_para1']}";
            }
          }
           ?>
        </textarea>


        <label>Update Phone Number:</label>
        <p class="italic">*Please note editing this number will also change the phone number on the donate page*</p>
        <textarea name="b_phone" rows="1" cols="50">
          <?php

          if(!is_string($b_phone)){
            while($row = mysqli_fetch_array($b_phone)){

              echo "{$row['tours_booking_phone']}";
            }
          }
           ?>
        </textarea><br>


        <label>Update Booking cost:</label>
        <textarea name="b_cost" rows="2" cols="100">
          <?php

          if(!is_string($b_cost)){
            while($row = mysqli_fetch_array($b_cost)){

              echo "{$row['tours_booking_cost']}";
            }
          }
           ?>
        </textarea>



        <label>Update Booking note:</label>
        <textarea name="b_note" rows="5" cols="50">
          <?php

          if(!is_string($b_note)){
            while($row = mysqli_fetch_array($b_note)){

              echo "{$row['tours_booking_note']}";
            }
          }
           ?>
        </textarea><br>




        <h3 class="form_heading1">Page Images:</h3>

        <label>Edit Image 1:</label>
        <?php

        if(!is_string($b_image)){
          while($row = mysqli_fetch_array($b_image)){

            echo "<img src=\"../img/tours/{$row['tours_booking_image']}\" alt=\"current Image1\">";
          }
        }
         ?>
        <input type="file" name="tours_image1" value="" size="32"><br>





        <label>Edit image 2:</label>
        <?php

        if(!is_string($d_image)){
          while($row = mysqli_fetch_array($d_image)){

            echo "<img src=\"../img/tours/{$row['tours_details_image']}\" alt=\"current Image2\">";
          }
        }
         ?>
        <input type="file" name="tours_image2" value="" size="32"><br>


        <h3 class="form_heading1">Tour Details Section:</h3>

        <label>Update 1st Details Paragraph:</label>
        <textarea name="d_para1" rows="10" cols="50">
          <?php

          if(!is_string($d_para1)){
            while($row = mysqli_fetch_array($d_para1)){

              echo "{$row['tours_details_para1']}";
            }
          }
           ?>
        </textarea><br>



        <label>Update 2nd Details Paragraph:</label>
        <textarea name="d_para2" rows="5" cols="50">
          <?php

          if(!is_string($d_para2)){
            while($row = mysqli_fetch_array($d_para2)){

              echo "{$row['tours_details_para2']}";
            }
          }
           ?>
        </textarea><br>



        <label>Update 3rd Details Paragraph:</label>
        <textarea name="d_para3" rows="5" cols="50">
          <?php

          if(!is_string($d_para3)){
            while($row = mysqli_fetch_array($d_para3)){

              echo "{$row['tours_details_para3']}";
            }
          }
           ?>
        </textarea><br>

        <label>Update Details Safety Note:</label>
        <textarea name="d_note" rows="5" cols="50">
          <?php

          if(!is_string($d_note)){
            while($row = mysqli_fetch_array($d_note)){

              echo "{$row['tours_details_note']}";
            }
          }
           ?>
        </textarea><br>


        <label>Update Where/When To Arrive Info:</label>
        <textarea name="w_para1" rows="5" cols="50">
          <?php

          if(!is_string($w_para1)){
            while($row = mysqli_fetch_array($w_para1)){

              echo "{$row['tours_where_para1']}";
            }
          }
           ?>
        </textarea><br>

        <input type="submit" name="tours_submit" value="Update Tours">
      </form>



    </div>
</div>

</div>



<!--  END TOURS EDIT AREA         -->










<div class="row">
<div class="col-12 page_edits_title_con" id="about_edits_title">

  <p class="page_title">about Page</p>

  <div class="page_button_con">
  <button class="exp_button" data-box="2"><i class="fa fa-arrow-circle-right fa-2x"></i></button>
  <button class="less_button" data-box="2"><i class="fa fa-arrow-circle-down fa-2x"></i></button>
</div>

</div>


<div class="col-12 page_edits_con" id="about_edits_con" data-box="2">
    <div class="d-flex justify-content-center">

      <form action="admin_cms.php" class="form2" method="post" enctype="multipart/form-data">

          <h3 class="form_heading1">About the Island:</h3>

        <label>Update 1st Paragraph:</label>
        <textarea name="a_para1" rows="5" cols="100">
          <?php
          if(!is_string($a_para1)){
            while($row = mysqli_fetch_array($a_para1)){

              echo "{$row['about_para1']}";
            }
          }
           ?>
        </textarea>



        <label>Update About Image #1:</label>
        <?php

        if(!is_string($a_image1)){
          while($row = mysqli_fetch_array($a_image1)){

            echo "<img src=\"../img/about/{$row['about_image1']}\" alt=\"About Image1\" width=\"200px\">";
          }
        }
         ?>
        <input type="file" name="a_image1" value="" size="32">





        <label>Update About Paragraph 2 (1st half):</label>
        <textarea name="a_para2" rows="5" cols="100">
          <?php
          if(!is_string($a_para2)){
            while($row = mysqli_fetch_array($a_para2)){

              echo "{$row['about_para2']}";
            }
          }
           ?>
        </textarea>

        <label>Update About Paragraph 2 (2nd half):</label>
        <textarea name="a_para3" rows="5" cols="10">
          <?php
          if(!is_string($a_para3)){
            while($row = mysqli_fetch_array($a_para3)){

              echo "{$row['about_para3']}";
            }
          }
           ?>
        </textarea><br>

        <label>update ABOUT image 2:</label>
        <?php

        if(!is_string($a_image2)){
          while($row = mysqli_fetch_array($a_image2)){

            echo "<img src=\"../img/about/{$row['about_image2']}\" alt=\"About Image2\" width=\"200px\">";
          }
        }
         ?>
        <input type="file" name="a_image2" value="" size="32"><br>



<h3 class="form_heading1">Chantry Lighthouse History:</h3>

        <label>Update History(part1):</label>
        <textarea name="h_para1" rows="10" cols="50">
          <?php
          if(!is_string($h_para1)){
            while($row = mysqli_fetch_array($h_para1)){

              echo "{$row['about_hist_para1']}";
            }
          }
           ?>
        </textarea>

        <label>update Hisotry(part2):</label>
        <textarea name="h_para2" rows="10" cols="50">
          <?php
          if(!is_string($h_para2)){
            while($row = mysqli_fetch_array($h_para2)){

              echo "{$row['about_hist_para2']}";
            }
          }
           ?>
        </textarea><br>



<h3 class="form_heading1">Federal Bird Sanctuary:</h3>

        <label>Update About Bird Sanctuary:</label>
        <textarea name="bi_para1" rows="5" cols="100">
          <?php
          if(!is_string($bi_para1)){
            while($row = mysqli_fetch_array($bi_para1)){

              echo "{$row['about_bird_para1']}";
            }
          }
           ?>
        </textarea><br>


        <label>Update Bird Image:</label>
        <?php

        if(!is_string($bi_image1)){
          while($row = mysqli_fetch_array($bi_image1)){

            echo "<img src=\"../img/about/{$row['about_bird_image1']}\" alt=\"About Bird Image1\" width=\"200px\">";
          }
        }
         ?>
        <input type="file" name="bi_image1" value="" size="32"><br>



<h3 class="form_heading1">Chantry Lighthouse Restoration:</h3>

        <label>Update Lighthouse Restoration Information:</label>
        <textarea name="l_para1" rows="5" cols="100">
          <?php
          if(!is_string($l_para1)){
            while($row = mysqli_fetch_array($l_para1)){

              echo "{$row['about_lhouse_para1']}";
            }
          }
           ?>
        </textarea><br>






        <label>Update Lighthouse Before Image:</label>
        <?php

        if(!is_string($l_image1)){
          while($row = mysqli_fetch_array($l_image1)){

            echo "<img src=\"../img/about/{$row['about_lhouse_image1']}\" alt=\"Lighthouse before Image\" width=\"200px\">";
          }
        }
         ?>
        <input type="file" name="l_image1" value="" size="32">


        <label>Update Before info:</label>
        <textarea name="l_binfo" rows="5" cols="50">
          <?php
          if(!is_string($l_binfo)){
            while($row = mysqli_fetch_array($l_binfo)){

              echo "{$row['about_l_binfo']}";
            }
          }
           ?>
        </textarea><br>




        <label>Update lighthouse after image:</label>
        <?php

        if(!is_string($l_image2)){
          while($row = mysqli_fetch_array($l_image2)){

            echo "<img src=\"../img/about/{$row['about_lhouse_image2']}\" alt=\"Lighthouse After Image\" width=\"200px\">";
          }
        }
         ?>
        <input type="file" name="l_image2" value="" size="32">

        <label>update lighthouse after info:</label>
          <textarea name="l_ainfo" rows="5" cols="50">
            <?php
            if(!is_string($l_ainfo)){
              while($row = mysqli_fetch_array($l_ainfo)){

                echo "{$row['about_l_ainfo']}";
              }
            }
             ?>
          </textarea><br>



<h3 class="form_heading1">About Page Final paragraph:</h3>
        <label>update last paragraph:</label>
        <textarea name="lastpara" rows="8" cols="100">
          <?php
          if(!is_string($lastpara)){
            while($row = mysqli_fetch_array($lastpara)){

              echo "{$row['about_lastpara']}";
            }
          }
           ?>
        </textarea><br>


        <input type="submit" name="about_submit" value="Update About">
        </form>



    </div>
</div>

</div>


















<div class="row">
<div class="col-12 page_edits_title_con" id="gallery_edits_title">

  <p class="page_title">gallery Page</p>

  <div class="page_button_con">
  <button class="exp_button" data-box="3"><i class="fa fa-arrow-circle-right fa-2x"></i></button>
  <button class="less_button" data-box="3"><i class="fa fa-arrow-circle-down fa-2x"></i></button>
</div>

</div>


<div class="col-12 page_edits_con" id="gallery_edits_con" data-box="3">
    <div class="d-flex justify-content-center">

      <form action="admin_cms.php" class="form1" method="post" enctype="multipart/form-data">

        <h3 class="form_heading1">Update Gallery:</h3>

<h3 class="form_heading1">Add Image:</h3>
      <label>Image:</label><br>
      <input type="file" name="gallery_image" value="" size="32"><br><br>

      <label>Description:</label><br>
      <input type="text" name="gallery_desc" value="" size="32"><br><br>

      <input type="submit" name="gallery_submit" value="Add Image">
      </form>
      </div>
<div class="d-flex justify-content-center">
      <a href="deleteimage.php">Delete Images</a>
    </div>
</div>

</div>












<div class="row">
<div class="col-12 page_edits_title_con" id="community_edits_title">

  <p class="page_title">community Page</p>

  <div class="page_button_con">
  <button class="exp_button" data-box="4"><i class="fa fa-arrow-circle-right fa-2x"></i></button>
  <button class="less_button" data-box="4"><i class="fa fa-arrow-circle-down fa-2x"></i></button>
</div>

</div>


<div class="col-12 page_edits_con" id="community_edits_con" data-box="4">
    <div class="d-flex justify-content-center">



      <form action="admin_cms.php" method="post" class="form1" enctype="multipart/form-data">
        <h3 class="form_heading1">Update Volunteers Section:</h3>

      <label>beginning paragraph:</label>
      <textarea name="vol_para" rows="5" cols="100">
        <?php
        if(!is_string($c_vol_para)){
          while($row = mysqli_fetch_array($c_vol_para)){
            echo "{$row['comm_vol_para1']}";
          }
        }
         ?>
      </textarea>
      <input type="submit" name="comm_vol_para_submit" value="Update Paragraph">
      </form>

    </div>


    <div class="d-flex justify-content-center">

      <form action="admin_cms.php" class="form1" method="post" enctype="multipart/form-data">
        <h4 class="form_heading2">Add Volunteers</h4>

        <h5 class="form_heading3">Volunteer with specific position:</h5>
        <label> First name:</label>
        <input type="text" name="vol_fname" value="" size="32"><br>

        <label> Last name:</label>
        <input type="text" name="vol_lname" value="" size="32"><br>

        <label> Position:</label>
        <input type="text" name="vol_position" value="" size="32"><br>


      <h5 class="form_heading3">Other volunteer:</h5>
        <label> First name:</label>
        <input type="text" name="vol2_fname" value="" size="32"><br>

        <label> Last name:</label>
        <input type="text" name="vol2_lname" value="" size="32"><br>


        <input type="submit" name="vol_submit" value="Add New Volunteer(s)">

      </form>
        </div>


  <div class="d-flex justify-content-center">

      <div class="form_delete_area">
        <h5 class="form_heading3">Delete A Volunteer:</h5>
        <?php
        while($row=mysqli_fetch_array($vol1)){
          echo "{$row['vol_fname']}{$row['vol_lname']}<a href=\"phpscripts/caller.php?caller_id=delete_vol&id={$row['vol_id']}\">:   Delete Volunteer</a><br>";
        }
        while($row=mysqli_fetch_array($vol2)){
          echo "{$row['vol2_fname']}{$row['vol2_lname']}<a href=\"phpscripts/caller.php?caller_id=delete_vol&id={$row['vol2_id']}\">:   Delete Volunteer</a><br>";
        }
         ?>
      </div>
    </div>


    <div class="d-flex justify-content-center">
      <form action="admin_cms.php" method="post" class="form1" enctype="multipart/form-data">
  <h3 class="form_heading1">Update Our Events/News Section:</h3>
    <h5 class="form_heading3">Add An Event/News</h5>
        <label>Event Title:</label>
        <input type="text" name="event_title" value="" size="32">

        <label>Main Event Image:</label>
        <input type="file" name="event_image" value="" size="32">


        <label>Todays Date:</label><br>
        <input type="text" name="event_date" value="" size="32">

        <label>event info:</label>
        <textarea name="event_info" value="" type="text" rows="10" cols="50">
        </textarea>

      <input type="submit" name="event_submit" value="Add Event">
      </form>
    </div>

      <div class="d-flex justify-content-center">
      <div class="form_delete_area">
        <h5 class="form_heading3">Delete An Event/News</h5>
        <?php
        while($row=mysqli_fetch_array($c_events)){
          echo "{$row['event_title']}<a href=\"phpscripts/caller.php?caller_id=delete_event&id={$row['event_id']}\">:   Delete Event</a><br>";
        }
         ?>
      </div>
    </div>




<div class="d-flex justify-content-center">
  <form action="admin_cms.php" method="post" class="form1" enctype="multipart/form-data">
  <h3 class="form_heading1">Update More To Discover Section:</h3>
  <h5 class="form_heading3">Add A Partner</h5>
    <label>Company name:</label><br>
    <input type="text" name="partners_name" value="" size="32"><br><br>

    <label>Company Logo:</label><br>
    <input type="file" name="partners_image" value="" size="32"><br><br>

  <input type="submit" name="partners_submit" value="Add Partner">
  </form>
</div>

  <div class="d-flex justify-content-center">

  <div class="form_delete_area">
  <h5 class="form_heading3">Delete A Partner</h5>
  <?php
  while($row=mysqli_fetch_array($partners)){
    echo "{$row['partners_name']}<a href=\"phpscripts/caller.php?caller_id=delete_partner&id={$row['partners_id']}\">:  Delete Partner</a><br>";
  }
   ?>
 </div>
 </div>


</div>

</div>


















<div class="row">
<div class="col-12 page_edits_title_con" id="donate_edits_title">

  <p class="page_title">donate Page</p>

  <div class="page_button_con">
  <button class="exp_button" data-box="5"><i class="fa fa-arrow-circle-right fa-2x"></i></button>
  <button class="less_button" data-box="5"><i class="fa fa-arrow-circle-down fa-2x"></i></button>
</div>

</div>


<div class="col-12 page_edits_con" id="donate_edits_con" data-box="5">
<div class='d-flex justify-content-center'>
  <form action="admin_cms.php" class="form2" method="post" enctype="multipart/form-data">
<h3 class="form_heading1">Update Donation Information:</h3>
    <label>Update 1st Paragraph:</label>
    <textarea name="do_para1" rows="5" cols="100">
      <?php
      if(!is_string($do_para1)){
        while($row = mysqli_fetch_array($do_para1)){
          echo "{$row['donate_para1']}";
        }
      }
       ?>
    </textarea>


    <label>Edit Address:</label>
    <p class="italic"> *please note this will also change the address on the contact page*</p>
    <?php
    if(!is_string($do_add)){
      while($row = mysqli_fetch_array($do_add)){
        echo "<input type=\"text\" name=\"do_add1\" value=\"{$row['donate_address1']}\" size=\"32\"><br>";
        echo "<input type=\"text\" name=\"do_add2\" value=\"{$row['donate_address2']}\" size=\"32\"><br>";
        echo "<input type=\"text\" name=\"do_add3\" value=\"{$row['donate_address3']}\" size=\"32\"><br>";
        echo "<input type=\"text\" name=\"do_add4\" value=\"{$row['donate_address4']}\" size=\"32\"><br>";
      }
    }
     ?>

     <br><label>Update Donation note:</label>
     <textarea name="do_note" rows="3" cols="100">
       <?php
       if(!is_string($do_note)){
         while($row = mysqli_fetch_array($do_note)){
           echo "{$row['donate_note']}";
         }
       }
        ?>
     </textarea><br>

    <br><label>Update 2nd Paragraph:</label>
    <textarea name="do_para2" rows="5" cols="50">
      <?php
      if(!is_string($do_para2)){
        while($row = mysqli_fetch_array($do_para2)){
          echo "{$row['donate_para2']}";
        }
      }
       ?>
    </textarea><br>


    <input type="submit" name="donate_submit" value="Update Donate">
    </form>
  </div>


</div>

</div>












<div class="row">
<div class="col-12 page_edits_title_con" id="contact_edits_title">

  <p class="page_title">contact Page</p>

  <div class="page_button_con">
  <button class="exp_button" data-box="6"><i class="fa fa-arrow-circle-right fa-2x"></i></button>
  <button class="less_button" data-box="6"><i class="fa fa-arrow-circle-down fa-2x"></i></button>
</div>

</div>


<div class="col-12 page_edits_con" id="contact_edits_con" data-box="6">
    <div class="d-flex justify-content-center">
      <form action="admin_cms.php" method="post" class="form2" enctype="multipart/form-data">

<h3 class="form_heading1">Update Contact Information:</h3>

        <label>Update phone number:</label>
        <p class="italic form_specp">*please note this will also change on the tours page*</p>
        <textarea name="b_phone" rows="1" cols="50">
          <?php
          if(!is_string($b_phone2)){
            while($row = mysqli_fetch_array($b_phone2)){

              echo "{$row['tours_booking_phone']}";
            }
          }
           ?>
        </textarea>


        <label>Update Address:</label>
        <p class="italic form_specp">*please note this will also change on the donate page*</p>
        <?php
        if(!is_string($do_add2)){
          while($row = mysqli_fetch_array($do_add2)){
            echo "<input type=\"text\" name=\"do_add1\" value=\"{$row['donate_address1']}\" size=\"32\"><br>";
            echo "<input type=\"text\" name=\"do_add2\" value=\"{$row['donate_address2']}\" size=\"32\"><br>";
            echo "<input type=\"text\" name=\"do_add3\" value=\"{$row['donate_address3']}\" size=\"32\"><br>";
            echo "<input type=\"text\" name=\"do_add4\" value=\"{$row['donate_address4']}\" size=\"32\"><br>";
          }
        }
         ?>


         <label>Update Directions:</label>
         <textarea name="co_para1" rows="5" cols="100">
           <?php

           if(!is_string($co_para1)){
             while($row = mysqli_fetch_array($co_para1)){

               echo "{$row['contact_para1']}";
             }
           }
            ?>
         </textarea><br>





        <input type="submit" name="contact_submit" value="Update Contact">
      </form>
    </div>
</div>

</div>




<div class="d-flex justify-content-center"  id="user_man_title">
  <p class="box_heading">User Management:</p>
</div>










<div class="row">
<div class="col-12 page_edits_title_con" id="createuser_edits_title">

  <p class="page_title">CREATE USER</p>

  <div class="page_button_con">
  <button class="exp_button" data-box="7"><i class="fa fa-arrow-circle-right fa-2x"></i></button>
  <button class="less_button" data-box="7"><i class="fa fa-arrow-circle-down fa-2x"></i></button>
</div>

</div>


<div class="col-12 page_edits_con" id="createuser_edits_con" data-box="7">
    <div class="d-flex justify-content-center">




            <form action="admin_cms.php" class="form1" method="post" id="create_form">
              <h3 class="form_heading1">Create a User:</h3>

              <label>first name:</label>
              <input name="firstname" placeholder="first name" type="text" value="<?php if(!empty($firstname)){echo $firstname;}?>">

            <br><br>

              <label>last name:</label>
              <input name="lastname" placeholder="last name" type="text" value="<?php if(!empty($lastname)){echo $lastname;}?>">

            <br><br>

              <label>email:</label>
              <input name="email" placeholder="email" type="text" value="<?php if(!empty($email)){echo $email;}?>">

            <br><br>

              <label>username:</label>
              <input name="username" placeholder="username" type="text" value="<?php if(!empty($username)){echo $username;}?>">

            <br><br>

            <p>A password will be generated and sent to the user's e-mail.</p>


              <select name="level_list">
                <option value="">Please select user level</option>
                <option value="2">Web Admin</option>
                <option value="1">Web Master</option>
              </select>

              <br><br>

            <input type="submit" name="submit" value="Create User" class="button_style create_button">

            </form>








      </form>
    </div>
</div>

</div>









<div class="row">
<div class="col-12 page_edits_title_con" id="edituser_edits_title">

  <p class="page_title">EDIT USER</p>

  <div class="page_button_con">
  <button class="exp_button" data-box="8"><i class="fa fa-arrow-circle-right fa-2x"></i></button>
  <button class="less_button" data-box="8"><i class="fa fa-arrow-circle-down fa-2x"></i></button>
</div>

</div>


<div class="col-12 page_edits_con" id="edituser_edits_con" data-box="8">
    <div class="d-flex justify-content-center">




              <?php if(!empty($message)){echo $message;} ?>

              <form action="admin_cms.php" method="post" class="form1" id="edit_form">
                  <h3 class="form_heading1">edit User:</h3>

                <label>first name:</label>
                <input name="firstname"  type="text" value="<?php echo $pop_form['user_firstname']; ?>">

              <br><br>

                <label>last name:</label>
                <input name="lastname" type="text" value="<?php echo $pop_form['user_lastname']; ?>">

              <br><br>

                <label>username:</label>
                <input name="username" type="text" value="<?php echo $pop_form['user_name']; ?>">

              <br><br>

                <label>password:</label>
                <input name="password" type="text" value="* * * * * *">

              <br><br>


              <input type="submit" name="submit" value="Edit User" class="button_style edit_button">

              </form>








      </form>
    </div>
</div>

</div>


<div class="row">
<div class="col-12 page_edits_title_con" id="deleteuser_edits_title">

  <p class="page_title">DELETE USER</p>

  <div class="page_button_con">
  <button class="exp_button" data-box="9"><i class="fa fa-arrow-circle-right fa-2x"></i></button>
  <button class="less_button" data-box="9"><i class="fa fa-arrow-circle-down fa-2x"></i></button>
</div>

</div>


<div class="col-12 page_edits_con" id="deleteuser_edits_con" data-box="9">
    <div class="d-flex justify-content-center">
<div class="form1">
<h3 class="form_heading1">delete User:</h3>

      <?php
      while($row=mysqli_fetch_array($users)){
        echo "{$row['user_name']}<a href=\"phpscripts/caller.php?caller_id=delete_user&id={$row['user_id']}\">   Delete User</a><br>";
      }
       ?>
</div>




    </div>
</div>

</div>







</div>


<footer id="cms_footer">
  <div class="d-flex justify-content-center">
    <a href="phpscripts/caller.php?caller_id=logout" class="blue_book_but">Log Out</a>
  </div>
</footer>




























              <script src="../script/cms.js"></script>
              <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
              <script src="../script/bootstrap/bootstrap.js"></script>

              </body>

              </html>
