<?php

ini_set('display_errors',1);
error_reporting(E_ALL);

function sendMail($u_name, $u_email, $u_subject, $u_message){
  include("config.php");

    // $to = "cmarsh44@uwo.ca";
    // $subject = $u_subject;
    // $message = $u_message;
    //
    // $headers = "From: " .$u_email. "\r\n";
    // $headers .= "Reply-To: ".$u_email. "\r\n";
    // $headers .= "CC:".$u_email."\r\n";
    // $headers .= "MIME-Version: 1.0\r\n";
    // $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
    //
    // $message = '<html><body>';
    // $message .= '<p>'. $u_message .'</p>';
    // $message .= '</body></html>';
    
    mail($to, $subject, $message, $headers);
}


 ?>
