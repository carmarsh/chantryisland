<?php

require_once('init.php');

if(isset($_GET['caller_id'])) {
  $dir = $_GET['caller_id'];

  if($dir == "logout") {
    logged_out();
  }else if($dir == "delete_img"){
    $id = $_GET['id'];
    deleteImage($id);
  }else if($dir == "delete_user"){
    $id = $_GET['id'];
    deleteUser($id);
  }else if($dir == "delete_vol"){
    $id = $_GET['id'];
    deleteVol($id);
  }else if($dir == "delete_event"){
    $id = $_GET['id'];
    deleteEvent($id);
  }else if($dir == "delete_partner"){
    $id = $_GET['id'];
    deletePartner($id);
  }
}

 ?>
