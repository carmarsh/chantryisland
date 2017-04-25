<?php

session_start();

function confirm_logged_in() {
  if (!isset($_SESSION['users_ID'])) {
    redirect_to('../index.php');
  }
}



function logged_out(){
  session_destroy();
  redirect_to("../../index.php");
}

 ?>
