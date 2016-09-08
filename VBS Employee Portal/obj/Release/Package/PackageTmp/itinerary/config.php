<?php
$servername = "localhost";
$username = "sarah";
$password = "vbs2687";
$database = "vbsep";
$table = "schedule";

try {
	$conn = new PDO('mysql:host='.$servername.';dbname='.$database, $username, $password);
	}
catch(PDOException $e)
	{
	print "Error!:" . $e->getMessage(). "<br/>";
	die();
}

?>
