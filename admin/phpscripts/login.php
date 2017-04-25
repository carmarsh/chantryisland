<?php

function log_in($username, $password, $ip) {

include('config.php');

$username = mysqli_real_escape_string($link, $username);
$password = mysqli_real_escape_string($link, $password);

$encrypted_pass = encryptpass('encrypt', $password); //encrypts password that user types in

$login_string = "SELECT * FROM tbl_users WHERE user_name ='{$username}' AND user_pass='{$encrypted_pass}'"; //makes sure that encrypted password matches
$user_set = mysqli_query($link, $login_string);


$found_user = mysqli_fetch_array($user_set, MYSQLI_ASSOC);
$id = $found_user['user_id'];
$lastlogin = $found_user['user_lastlogin'];

$_SESSION['users_ID'] = $id;
$_SESSION['users_NAME'] = $found_user['user_firstname'];
$_SESSION['users_LASTLOGIN'] = $found_user['user_lastlogin'];

//getting # of fails stored in the data base, based on username
$fails = "SELECT user_failedattempts FROM tbl_users WHERE user_name='{$username}'";
$result = mysqli_query($link, $fails);
$value = mysqli_fetch_array($result, MYSQLI_ASSOC);
$failcount = $value['user_failedattempts'];
$_SESSION['failcount'] = $failcount;

//checking date of new user login
$datecreated = $found_user['user_datecreated'];
$currentdate = date("Y-m-d H:i:s");
$time_diff = strtotime($currentdate) - strtotime($datecreated);

//check if user is blocked
$userblocked = $found_user['user_blocked'];


if(mysqli_num_rows($user_set)){ //checking if it equals the 1 row

if($failcount>=3) {
    $_SESSION['message2'] = "this account is blocked due to too many unsuccessful password attempts. please contact webmaster to unblock your account.";
  }

if ($time_diff > 86400 && $lastlogin == 0){
  $_SESSION['message2'] = "you waited to long to log in to your account for the first time and your account is now blocked. please contact webmaster to reset your account.";

  if(mysqli_query($link, $login_string)){
    $update_string = "UPDATE tbl_users SET user_blocked='yes' WHERE user_id={$id}";
    $update_query = mysqli_query($link, $update_string);
  }
}else{

if($failcount<3 && $userblocked == 'no'){

  if(mysqli_query($link, $login_string)){
    $update_string = "UPDATE tbl_users SET user_ip='{$ip}' WHERE user_id={$id}";
    $update_query = mysqli_query($link, $update_string);
  }

  if(mysqli_query($link, $login_string)){
    $update_string = "UPDATE tbl_users SET user_lastlogin= NOW() WHERE user_id={$id}";
    $update_query = mysqli_query($link, $update_string);
  }

  if($lastlogin==0){
    redirect_to("admin/admin_edituser.php");
  }else{
    redirect_to("admin/admin_cms.php");
  }
}
}

}


else{
  $update_fails = "UPDATE tbl_users SET user_failedattempts = user_failedattempts + 1 WHERE user_name='{$username}'";
  $update_query = mysqli_query($link, $update_fails);

  $_SESSION['message'] = "username or password is incorrect";

  if($failcount>=3) {
    $_SESSION['message2'] = "this account is blocked due to too many unsuccessful password attempts. please contact webmaster to unblock your account.";
    $_SESSION['message'] = "";
  }

}


  mysqli_close($link);
}


 ?>
