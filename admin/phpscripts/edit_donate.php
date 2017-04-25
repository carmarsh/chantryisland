<?php


function addPartner($image, $name){
  include("config.php");
  $image = mysqli_real_escape_string($link, $image);

  if($_FILES['partners_image']['type'] == "image/jpeg" || $_FILES['partners_image']['type'] == "image/jpeg" || $_FILES['partners_image']['type'] == "image/png"){
    $targetpath = "../img/comm/{$image}";
    if(move_uploaded_file($_FILES['partners_image']['tmp_name'], $targetpath)){
      $img = "../img/comm/.$image";

      $imagestring = "INSERT INTO tbl_community_partners VALUE (NULL, '{$name}','{$image}')";
      $result = mysqli_query($link, $imagestring);
    }
  }
mysqli_close($link);
}



function deletePartner($id){
  include("config.php");
  $delstring = "DELETE FROM tbl_community_partners WHERE partners_id={$id}";

  $delquery = mysqli_query($link, $delstring);


    if($delquery){
      redirect_to("../admin_cms.php");
    }else{
      $message = "This event isnt being deleted.";
      echo $message;
    }

    mysqli_close($link);
}




function updateDonate($para1, $add1, $add2, $add3, $add4, $note, $para2){
    include("config.php");
    $updatestring = "UPDATE tbl_donate SET donate_para1='{$para1}', donate_address1='{$add1}', donate_address2='{$add2}', donate_address3='{$add3}', donate_address4='{$add4}', donate_note='{$note}', donate_para2='{$para2}'";
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
