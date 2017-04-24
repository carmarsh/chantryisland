<?php


// $link = mysqli_connect('snakebiteband.netfirmsmysql.com', 'carlymarsh', '9629967k', 'db_chantryisland');
//
// if (!$link) {
// 	 die('Could not connect: ' . mysql_error());
// }
//
// $config = array(
// 	"mysql_server" => "snakebiteband.netfirmsmysql.com",
// 	"mysql_user" => "carlymarsh",
// 	"mysql_password" => "9629967k",
// 	"mysql_db" => "db_chantryisland"
// );


	$config = array(
		"mysql_server" => "localhost",
		"mysql_user" => "root",
		"mysql_password" => "root",
		"mysql_db" => "db_chantryisland"
	);

	$user = "root";
	$pass = "root";
	$url = "localhost";
	$db = "db_chantryisland";

	$link = mysqli_connect($url, $user, $pass, $db, "8889");


	// $url = "snakebiteband.netfirmsmysql.com";
	// $user = "carlymarsh";
	// $pass = "9629967k";
	// $db = "db_chantryisland";
	//
	// $link = mysqli_connect($url, $user, $pass, $db, "8889");
	//
	// $config = array(
	// 	"mysql_server" => "snakebiteband.netfirmsmysql.com",
	// 	"mysql_user" => "carlymarsh",
	// 	"mysql_password" => "9629967k",
	// 	"mysql_db" => "db_chantryisland"
	// );
	//
	// if(mysqli_connect_errno()) {
	// 	printf("Connect failed: %s\n", mysqli_connect_error());
	// 	exit();
	// }


?>
