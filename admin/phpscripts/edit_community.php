<?php
function addVPara($v_para){
  include("config.php");
  $v_para = mysqli_real_escape_string($link, $v_para);
  $updatestring = "UPDATE tbl_community SET comm_vol_para1='{$v_para}'";
  $updatequery = mysqli_query($link, $updatestring);

  if($updatequery) {
    redirect_to("admin_cms.php");
  }else{
    $message = 'there was a problem changing your user account settings';
    return $message;
  }
  mysqli_close($link);
}


function addVol($fname, $lname, $pos, $fname2, $lname2){
  include("config.php");
  $qstring = "INSERT INTO tbl_community_volunteers VALUE (NULL, '{$fname}','{$lname}','{$pos}')";
  $qstring2 = "INSERT INTO tbl_community_volunteers2 VALUE (NULL, '{$fname2}','{$lname2}')";
  $result = mysqli_query($link, $qstring);
  $result2 = mysqli_query($link, $qstring2);
  if($result && $result2) {
    redirect_to("admin_cms.php");
  }else{
    $message = 'there was a problem changing your user account settings';
    return $message;
  }
  mysqli_close($link);

}

function deleteVol($id){
  include("config.php");
  $delstring = "DELETE FROM tbl_community_volunteers WHERE vol_id={$id}";
  $delstring2 = "DELETE FROM tbl_community_volunteers2 WHERE vol2_id={$id}";
  $delquery = mysqli_query($link, $delstring);
  $delquery2 = mysqli_query($link, $delstring2);

    if($delquery){
      redirect_to("../admin_cms.php");
    }else{
      $message = "This volunteer isnt being deleted.";
      echo $message;
    }

    if($delquery2){
      redirect_to("../admin_cms.php");
    }else{
      $message = "This volunteer isnt being deleted.";
      echo $message;
    }

    mysqli_close($link);
}


function addEvent($title, $image, $date, $info){
    include("config.php");
    $image = mysqli_real_escape_string($link, $image);

    if($_FILES['event_image']['type'] == "image/jpeg" || $_FILES['event_image']['type'] == "image/jpeg" || $_FILES['event_image']['type'] == "image/png"){
      $targetpath = "../img/comm/{$image}";
      if(move_uploaded_file($_FILES['event_image']['tmp_name'], $targetpath)){
        $img = "../img/tours/.$image";

        $imagestring = "INSERT INTO tbl_community_events VALUE (NULL, '{$title}','{$image}','{$date}','{$info}')";
        $result = mysqli_query($link, $imagestring);
      }
    }
mysqli_close($link);
}


function deleteEvent($id){
  include("config.php");
  $delstring = "DELETE FROM tbl_community_events WHERE event_id={$id}";

  $delquery = mysqli_query($link, $delstring);


    if($delquery){
      redirect_to("../admin_cms.php");
    }else{
      $message = "This event isnt being deleted.";
      echo $message;
    }

    mysqli_close($link);
}



?>
