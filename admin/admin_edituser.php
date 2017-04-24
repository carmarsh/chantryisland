<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once("phpscripts/init.php");

$id = $_SESSION['users_ID'];

$pop_form = getUser($id);

if(isset($_POST['submit'])){
  $firstname = trim($_POST['firstname']);
  $lastname = trim($_POST['lastname']);
  $username = trim($_POST['username']);
  $password = trim($_POST['password']);

  $result = editUser($id, $firstname, $lastname, $username, $password);
  $message = $result;

}

?>

<!DOCTYPE HTML>
<html>
<head>
  <meta charset="UTF-8">
  <title>Edit User</title>

  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

  <link href="../css/main.css" rel="stylesheet" type="text/css">

</head>
<body>

<div id="edituserCon">
<div id="edituserformCon">

<h1>edit user</h1>

<a href="admin_index.php" id="back_button">Back to the admin panel</a>
<br><br>

<?php if(!empty($message)){echo $message;} ?>

<form action="admin_edituser.php" method="post" id="edit_form">

  <label>first name:</label>
  <input name="firstname"  type="text" value="<?php echo $pop_form['user_firstname']; ?>">

<br><br>

  <label>last name:</label>
  <input name="lastname" type="text" value="<?php echo $pop_form['user_lastname']; ?>">

<br><br>

  <label>username:</label>
  <input name="username" type="text" value="<?php echo $pop_form['user_name']; ?>">

<br><br>

  <label>password:</label>
  <input name="password" type="text" value="* * * * * *">

<br><br>


<input type="submit" name="submit" value="Edit User" class="button_style edit_button">

</form>
<br><br>



</div>
</div>
  </body>
  </html>
