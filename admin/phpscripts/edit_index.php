<?php

function addPara($para1){
  include("config.php");
  $para1 = mysqli_real_escape_string($link, $para1);
  $updatestring = "UPDATE tbl_index SET index_para1='{$para1}'";
  $updatequery = mysqli_query($link, $updatestring);

  if($updatequery) {
    redirect_to("admin_cms.php");
  }else{
    $message = 'there was a problem changing your user account settings';
    return $message;
  }
  mysqli_close($link);
}

function addVideo($video){
  include("config.php");

  $video = mysqli_real_escape_string($link, $video);

  if($_FILES['index_vid']['type'] == "video/mp4"){
    $targetpath = "../video/{$video}"; //WHERE FILE IS UPLOADED TO IN FOLDER

    if(move_uploaded_file($_FILES['index_vid']['tmp_name'], $targetpath)) {
      $vid = "../video/".$video;


    $updatestring = "UPDATE tbl_index SET index_video='{$video}'";
    $result = mysqli_query($link, $updatestring);

    }
  }
  mysqli_close($link);
}





 ?>
