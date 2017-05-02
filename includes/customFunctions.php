<?php

$server = $_SERVER['SERVER_NAME'];

$version = "0.1"; // *to do*: change to 1.0 at launch and remove this comment, small increment before each client viewing to reset css/script caching

// *to do* launch list
// Add right analytics UA number
// Add Google webmaster verification file (get with me)
// Add correct robots.txt (get with me)
// Add any of those stupid pixels (get with me, have a newer better way for click pixels)
// Search feature? Not sure if it will have one, either way get with me to finish setting up OR remove/update the markers I've already placed
// Verify dev/live server settings/get with me for Deploy setup

// Dev	
if($server == "") {
	
	$env = "dev";
	$url = "http://" . $server;
	
	$dbHost = '';
	$dbUser = '';
	$dbPass = '';
	$dbName = '';

// Live (English)



// Local	
} else {
	
	$env = "local";
	$url = "http://" . $server . ":8888/ssg-2017";
	$translate_url = "http://" . $server . ":8888/ssg-2017";
	
	$dbHost = 'localhost';
	$dbUser = 'root';
	$dbPass = 'root';
	$dbName = 'ssg';
	
}

function dbConnect () {
	global $dbConnection;
	global $dbUser;
	global $dbPass;
	global $dbHost;
	global $dbName;
	$dbConnection = mysql_connect($dbHost , $dbUser , $dbPass);
	mysql_select_db($dbName);
}

function protect($string){
	$string = trim(strip_tags(addslashes($string)));
	return $string;
}

function format($string) {
	$string = trim(strip_tags($string));
	return $string;
}

?>