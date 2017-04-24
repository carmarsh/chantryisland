<?php



function getUser($id){
  include("config.php");
  $userstring = "SELECT * FROM tbl_users WHERE user_id={$id}";
  $userquery = mysqli_query($link, $userstring);

  if($userquery) {
    $found_user = mysqli_fetch_array($userquery, MYSQLI_ASSOC);

    return $found_user;
  }else{
    $message = "There was an error editing this user";
    return $message;
  }
  mysqli_close($link);
}


function getUsers($tbl_users) {
  include("config.php");
  $queryAll = "SELECT * FROM {$tbl_users}";
  $runAll = mysqli_query($link, $queryAll);

  if($runAll){
    return $runAll;
  }else{
    $error =  "There was an error accessing this information.  Please contact your admin.";
    return $error;
  }
}




function createUser ($firstname, $lastname, $email, $username, $level) {

  include("config.php");

  $gen_pass = password_generator(8); //generate 8 character random password

  $encrypted_pass = encryptpass('encrypt', $gen_pass); //generates an encryption of the generated password to store in the database

  $ip = 0;
  $lastlogin = 0;
  $failedlogins = 0;
  $user_blocked = 'no';

  $datecreated = date("Y-m-d H:i:s");

  $userstring = "INSERT INTO tbl_users VALUES(NULL,'{$firstname}','{$lastname}','{$email}','{$username}','{$encrypted_pass}','{$level}','{$ip}','{$lastlogin}','{$failedlogins}','{$datecreated}','{$user_blocked}')"; //insert info into new row based on new user
  $userquery = mysqli_query($link, $userstring);

//mail function variables
  $to = $email; //send to address put in the email input box
  $subject = "Login Information";
  $message = "'Username: ' . $username 'Password: ' . $gen_pass"; //send user, username picked by admin, and PHP generated password
  $message .= ' Login into your account at this url: http://localhost/assign1/admin/admin_login.php'; //actual link to login screen when site is live here


  if($userquery){
    redirect_to("admin_index.php");
    mail($to, $subject, $message); //if user is successfully created, send the email

  }else{
    $message = "There was an issue creating this user.";
    return $message;
  }


  mysqli_close($link);
}





function editUser($id, $firstname, $lastname, $username, $password){
  include("config.php");

  $encrypted_pass = encryptpass('encrypt', $password);

  $updatestring = "UPDATE tbl_users SET user_firstname='{$firstname}', user_lastname='{$lastname}', user_name='{$username}', user_pass='{$encrypted_pass}' WHERE user_id={$id}";
  $updatequery = mysqli_query($link, $updatestring);

  if($updatequery) {
    redirect_to("admin_index.php");
  }else{
    $message = 'there was a problem changing your user account settings';
    return $message;
  }
  mysqli_close($link);
}




function deleteUser($id){
  include('config.php');

  $delstring = "DELETE FROM tbl_users WHERE user_id={$id}";
  $delquery = mysqli_query($link, $delstring);

  if($delquery){
    redirect_to("../admin_cms.php");
  }else{
    $message = "This user is protected from being deleted.";
    echo $message;
  }

  mysqli_close($link);
}






 ?>
