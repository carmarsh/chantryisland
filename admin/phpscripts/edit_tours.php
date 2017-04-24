<?php

function updateTours($b_para1, $phone, $cost, $note, $image1, $image2, $d_para1, $d_para2, $d_para3, $d_note, $w_para1){
  include("config.php");
  $b_para1 = mysqli_real_escape_string($link, $b_para1);
  $phone = mysqli_real_escape_string($link, $phone);
  $cost = mysqli_real_escape_string($link, $cost);
  $note = mysqli_real_escape_string($link, $note);

  $image1 = mysqli_real_escape_string($link, $image1);
  $image2 = mysqli_real_escape_string($link, $image2);

  $d_para1 = mysqli_real_escape_string($link, $d_para1);
  $d_para2 = mysqli_real_escape_string($link, $d_para2);
  $d_para3 = mysqli_real_escape_string($link, $d_para3);
  $d_note = mysqli_real_escape_string($link, $d_note);

  $w_para1 = mysqli_real_escape_string($link, $w_para1);

  if($_FILES['tours_image1']['type'] == "image/jpeg" || $_FILES['tours_image1']['type'] == "image/jpeg" || $_FILES['tours_image1']['type'] == "image/png"){
    $targetpath = "../img/tours/{$image1}";
    if(move_uploaded_file($_FILES['tours_image1']['tmp_name'], $targetpath)){
      $img = "../img/tours/.$image1";
      $image_updatestring = "UPDATE tbl_tours SET tours_booking_image='{$image1}'";
      $result = mysqli_query($link, $image_updatestring);
    }
  }

  if($_FILES['tours_image2']['type'] == "image/jpeg" || $_FILES['tours_image2']['type'] == "image/jpeg" || $_FILES['tours_image2']['type'] == "image/png"){
    $targetpath = "../img/tours/{$image2}";
    if(move_uploaded_file($_FILES['tours_image2']['tmp_name'], $targetpath)){
      $img = "../img/tours/.$image2";
      $image_updatestring = "UPDATE tbl_tours SET tours_details_image='{$image2}'";
      $result = mysqli_query($link, $image_updatestring);
    }
  }


  $updatestring = "UPDATE tbl_tours SET tours_booking_para1='{$b_para1}', tours_booking_phone='{$phone}', tours_booking_cost='{$cost}', tours_booking_note='{$note}', tours_details_para1='{$d_para1}', tours_details_para2='{$d_para2}', tours_details_para3='{$d_para3}', tours_details_note='{$d_note}', tours_where_para1='{$w_para1}'";
  $updatequery = mysqli_query($link, $updatestring);

  if($updatequery) {
    redirect_to("admin_cms.php");
  }else{
    $message = 'there was a problem changing your user account settings';
    return $message;
  }
  mysqli_close($link);
}


 ?>
