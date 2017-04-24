<?php

include('config.php');

$mysqli = new mysqli($config['mysql_server'], $config['mysql_user'], $config['mysql_password'], $config['mysql_db']);

if($mysqli->connect_errno) {
  printf("Connection failed: %s \n", $mysqli->connect_error);
  exit();
}


$myQuery = "SELECT * FROM tbl_gallery";
$result = mysqli_query($mysqli, $myQuery);

echo json_encode(mysqli_num_rows($result));

 ?>
