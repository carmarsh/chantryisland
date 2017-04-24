<?php


function addImage($image, $thumb, $desc){
  include("config.php");

  $image = mysqli_real_escape_string($link, $image);

  if($_FILES['gallery_image']['type'] == "image/jpg" || $_FILES['gallery_image']['type'] == "image/jpeg"){
    $targetpath = "../img/gallery/{$image}"; //WHERE FILE IS UPLOADED TO IN FOLDER

    if(move_uploaded_file($_FILES['gallery_image']['tmp_name'], $targetpath)) {
      $orig = "../img/gallery/".$image;
      $thumb_copy = "../img/gallery/".$thumb;

      if(!copy($orig, $thumb_copy)){
        echo "Failed to copy";
      }

      $qstring = "INSERT INTO tbl_gallery VALUE (NULL, '{$thumb}','{$image}','{$desc}')";
      $result = mysqli_query($link, $qstring);

    }
  }
  mysqli_close($link);
}

  function deleteImage($id){
    include("config.php");
    $delstring = "DELETE FROM tbl_gallery WHERE gallery_id={$id}";
    $delquery = mysqli_query($link, $delstring);
    if($delquery){
      redirect_to("../admin_cms.php");
    }else{
      $message = "This image cannot be deleted";
      echo $message;
    }
    mysqli_close($link);
  }




 ?>
