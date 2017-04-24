<?php
 ini_set('display_errors', 1);
 error_reporting(E_ALL);

 require_once("phpscripts/init.php");

$ip = $_SERVER["REMOTE_ADDR"];

$_SESSION['message'] = "";
$_SESSION['message2'] = "";


if(isset($_POST['submit'])) {
  // echo "clicked";

  $username = trim($_POST['username']);
  $password = trim($_POST['password']);

  if($username != "" && $password != "") {

    $result = log_in($username, $password, $ip);
    $message = $result;

  }

  else{

    $_SESSION['message'] = "please fill in all the required fields";

  }
}





 ?>

<!DOCTYPE HTML>
<html>
<head>
  <meta charset="UTF-8">
  <title>Admin Login Page</title>


  <link href="../css/main.css" rel="stylesheet" type="text/css">


</head>
<body>


  <h1>LOG IN</h1>


  <?php
  echo $_SESSION['message2'];
   ?>


<form action="admin_login.php" method="post">

  <label>Username:</label>
  <input type="text" name="username" value="" class="textbox" placeholder="username">

  <label>Password:</label>
  <input type="password" name="password" value="" class="textbox" placeholder="password">

  <input type="submit" name="submit" value="log in">

</form>

<?php
echo $_SESSION['message'];
 ?>

 <?php
 echo $_SESSION['message2'];
  ?>


</body>
</html>
