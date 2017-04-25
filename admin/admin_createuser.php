<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once("phpscripts/init.php");

if(isset($_POST['submit'])) {
  // echo "submit clicked";
  $firstname = trim($_POST['firstname']);
  $lastname = trim($_POST['lastname']);
  $email = trim($_POST['email']);
  $username = trim($_POST['username']);
  $level = $_POST['level_list'];

  if(empty($level)) {
    $message = "please select user level";
  }else {
    $result = createUser($firstname, $lastname, $email, $username, $level);
    $message = $result;
  }
}



 ?>




<!DOCTYPE HTML>
<html>
<head>
  <meta charset="UTF-8">
  <title>Create User</title>

  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

  <link href="../css/main.css" rel="stylesheet" type="text/css">

</head>
<body>
<div id="createuserCon">
<div id="createuserformCon">

<h1>create a new user</h1>

<a href="admin_index.php" id="back_button">Back to the admin panel</a>
<br><br>

<?php if(!empty($message)){echo $message;} ?>

<form action="admin_createuser.php" method="post" id="create_form">

  <label>first name:</label>
  <input name="firstname" placeholder="first name" type="text" value="<?php if(!empty($firstname)){echo $firstname;}?>">

<br><br>

  <label>last name:</label>
  <input name="lastname" placeholder="last name" type="text" value="<?php if(!empty($lastname)){echo $lastname;}?>">

<br><br>

  <label>email:</label>
  <input name="email" placeholder="email" type="text" value="<?php if(!empty($email)){echo $email;}?>">

<br><br>

  <label>username:</label>
  <input name="username" placeholder="username" type="text" value="<?php if(!empty($username)){echo $username;}?>">

<br><br>

<p>A password will be generated and sent to the user's e-mail.</p>


  <select name="level_list">
    <option value="">Please select user level</option>
    <option value="2">Web Admin</option>
    <option value="1">Web Master</option>
  </select>

  <br><br>

<input type="submit" name="submit" value="Create User" class="button_style create_button">

</form>



</div>
</div>
  </body>
  </html>
