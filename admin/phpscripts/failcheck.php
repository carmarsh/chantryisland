<?php


$fails = "SELECT user_failedattempts FROM tbl_users WHERE user_name='{$username}'";
$result = mysqli_query($link, $fails);
$value = mysqli_fetch_array($result, MYSQLI_ASSOC);
$failcount = $value['user_failedattempts'];   //getting fail count??
 echo $failcount;

 ?>
