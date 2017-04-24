<?php

require_once("phpscripts/init.php");
//confirm_logged_in();

ini_set('display_errors', 1);
error_reporting(E_ALL);

$tbl = "tbl_gallery";
$images = getAll($tbl);


 ?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Delete Image</title>
<!-- <link href="../css/normalize.css" rel="stylesheet" type="text/css"> -->
<!-- <link href="../css/chanty.css" rel="stylesheet" type="text/css"> -->
</head>
<body>


<h1> Delete An Image</h1>

<?php
while($row=mysqli_fetch_array($images)){
  echo "{$row['gallery_desc']}<a class=\"blue_book_but\" href=\"phpscripts/caller.php?caller_id=delete_img&id={$row['gallery_id']}\">Delete Image</a><br>
    <img src=\"../img/gallery/{$row['gallery_thumb']}\" alt=\"Gallery Image\" width=\"100px\">";
}
 ?>

</body>
</html>
