<?php

function redirect_to($location) {
  if($location != NULL) {
    header("Location: {$location}");
    exit;
  }
}


function getAll($tbl) {
  include("config.php");
  $queryAll = "SELECT * FROM {$tbl}";
  $runAll = mysqli_query($link, $queryAll);

  if($runAll){
    return $runAll;
  }else{
    $error =  "There was an error accessing this information.  Please contact your admin.";
    return $error;
  }
}

function getMonth($tbl_dates, $month) {
  include("config.php");

  $month = mysqli_real_escape_string($link, $month);

  $queryMonth = "SELECT * FROM {$tbl_dates} WHERE dates_month = '{$month}'";
  $queryMonth = mysqli_query($link, $queryMonth);

  if($queryMonth){
    return $queryMonth;
  }else{
    $error =  "There was an error accessing this information.  Please contact your admin.";
    return $error;
  }
}


 ?>
