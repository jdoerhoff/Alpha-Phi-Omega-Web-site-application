<?php
$user = $_REQUEST['username'];
$pass = $_REQUEST['PW'];
$host = "database.tcnj.edu";
$port = "5432";
$db = "aphio";

// Create connection.
$link = pg_connect ("host=$host port=$port dbname=$db user=$user password=$pass");

if (!$link) {
	die("Could not open connection to database server");
	echo "<br />";
}
?>