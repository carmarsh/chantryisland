<?php

function updateContact($phone, $add1, $add2, $add3, $add4, $para1){
    include("config.php");
    $updatestring = "UPDATE tbl_tours SET tours_booking_phone='{$phone}'";
    $updatestring2 = "UPDATE tbl_donate SET donate_address1='{$add1}', donate_address2='{$add2}', donate_address3='{$add3}', donate_address4='{$add4}'";
    $updatestring3 = "UPDATE tbl_contact SET contact_para1='{$para1}'";
    $updatequery = mysqli_query($link, $updatestring);
    $updatequery2 = mysqli_query($link, $updatestring2);
    $updatequery3 = mysqli_query($link, $updatestring3);
    if($updatequery) {
      redirect_to("admin_cms.php");
    }else{
      $message = 'there was a problem updating the phone number';
      return $message;
    }
    if($updatequery2) {
      redirect_to("admin_cms.php");
    }else{
      $message = 'there was a problem updating the address';
      return $message;
    }
    if($updatequery3) {
      redirect_to("admin_cms.php");
    }else{
      $message = 'there was a problem updating the paragraph';
      return $message;
    }

    mysqli_close($link);
}


?>
