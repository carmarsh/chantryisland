<?php



//generates random passwoord
function password_generator($length = 8) {
  $characters = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
  $gen_pass = substr( str_shuffle($characters), 0, $length );
  return $gen_pass;
}


//function to encrypt a string
function encryptpass($action, $string){
  $output = false;
  $encryptMethod = "AES-256-CBC";
  $secretKey = 'ching chong potato';
  $secretIV = 'bing bong tomato';

  $key = hash('sha256', $secretKey);
  $iv = substr(hash('sha256', $secretIV), 0, 16);

  $output = openssl_encrypt($string, $encryptMethod, $key, 0, $iv);
  $output = base64_encode($output);

  return $output;

}
