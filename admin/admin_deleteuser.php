<?php

require_once("phpscripts/init.php");
//confirm_logged_in();

ini_set('display_errors', 1);
error_reporting(E_ALL);

$tbl = "tbl_users";
$users = getAll($tbl);


 ?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Delete user</title>
</head>
<body>


<h1> Delete User</h1>


<?php
while($row=mysqli_fetch_array($users)){
  echo "{$row['user_name']}<a href=\"phpscripts/caller.php?caller_id=delete_user&id={$row['user_id']}\">Delete User</a><br>";
}
 ?>

</body>
</html>
