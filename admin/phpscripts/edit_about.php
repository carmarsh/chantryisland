<?php

function updateAbout($a_para1, $a_image1,  $a_para2, $a_para3, $a_image2, $h_para1, $h_para2, $bi_para1, $bi_image1, $l_para1, $l_image1, $l_image2, $l_ainfo, $l_binfo, $lastpara){
  include("config.php");

  $a_image1 = mysqli_real_escape_string($link, $a_image1);
  $a_image2 = mysqli_real_escape_string($link, $a_image2);
  $bi_image1 = mysqli_real_escape_string($link, $bi_image1);
  $l_image1 = mysqli_real_escape_string($link, $l_image1);
  $l_image2 = mysqli_real_escape_string($link, $l_image2);

  $l_binfo = mysqli_real_escape_string($link, $l_binfo);
  $l_ainfo = mysqli_real_escape_string($link, $l_ainfo);

  if($_FILES['a_image1']['type'] == "image/jpeg" || $_FILES['a_image1']['type'] == "image/jpeg" || $_FILES['a_image1']['type'] == "image/png"){
    $targetpath = "../img/about/{$a_image1}";
    if(move_uploaded_file($_FILES['a_image1']['tmp_name'], $targetpath)){
      $img = "../img/tours/.$a_image1";
      $image_updatestring = "UPDATE tbl_about SET about_image1='{$a_image1}'";
      $result = mysqli_query($link, $image_updatestring);
    }
  }

  if($_FILES['a_image2']['type'] == "image/jpeg" || $_FILES['a_image2']['type'] == "image/jpeg" || $_FILES['a_image2']['type'] == "image/png"){
    $targetpath = "../img/about/{$a_image2}";
    if(move_uploaded_file($_FILES['a_image2']['tmp_name'], $targetpath)){
      $img = "../img/tours/.$a_image2";
      $image_updatestring = "UPDATE tbl_about SET about_image2='{$a_image2}'";
      $result = mysqli_query($link, $image_updatestring);
    }
  }

  if($_FILES['bi_image1']['type'] == "image/jpeg" || $_FILES['bi_image1']['type'] == "image/jpeg" || $_FILES['bi_image1']['type'] == "image/png"){
    $targetpath = "../img/about/{$bi_image1}";
    if(move_uploaded_file($_FILES['bi_image1']['tmp_name'], $targetpath)){
      $img = "../img/tours/.$bi_image1";
      $image_updatestring = "UPDATE tbl_about SET about_bird_image1='{$bi_image1}'";
      $result = mysqli_query($link, $image_updatestring);
    }
  }

  if($_FILES['l_image1']['type'] == "image/jpeg" || $_FILES['l_image1']['type'] == "image/jpeg" || $_FILES['l_image1']['type'] == "image/png"){
    $targetpath = "../img/about/{$l_image1}";
    if(move_uploaded_file($_FILES['l_image1']['tmp_name'], $targetpath)){
      $img = "../img/tours/.$l_image1";
      $image_updatestring = "UPDATE tbl_about SET about_lhouse_image1='{$l_image1}'";
      $result = mysqli_query($link, $image_updatestring);
    }
  }

  if($_FILES['l_image2']['type'] == "image/jpeg" || $_FILES['l_image2']['type'] == "image/jpeg" || $_FILES['l_image2']['type'] == "image/png"){
    $targetpath = "../img/about/{$l_image2}";
    if(move_uploaded_file($_FILES['l_image2']['tmp_name'], $targetpath)){
      $img = "../img/tours/.$l_image2";
      $image_updatestring = "UPDATE tbl_about SET about_lhouse_image2='{$l_image2}'";
      $result = mysqli_query($link, $image_updatestring);
    }
  }

  $updatestring = "UPDATE tbl_about SET about_para1='{$a_para1}', about_para2='{$a_para2}', about_para3='{$a_para3}', about_hist_para1='{$h_para1}', about_hist_para2='{$h_para2}', about_bird_para1='{$bi_para1}', about_lhouse_para1='{$l_para1}', about_lastpara='{$lastpara}', about_l_binfo='{$l_binfo}', about_l_ainfo='{$l_ainfo}'";
  $updatequery = mysqli_query($link, $updatestring);

  if($updatequery) {
    redirect_to("admin_cms.php");
  }else{
    $message = 'there was a problem updating the about page';
    return $message;
  }
  mysqli_close($link);
}
?>
