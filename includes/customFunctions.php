<?php

$server = $_SERVER['SERVER_NAME'];

$version = "1.01";

// Dev	
if($server == "dev.socialsolutions.com") {
	
	$env = "dev";
	$lang = "en";
	$url = "http://" . $server;

// Live (English)
} else if($server == "www.socialsolutions.com" || $server == "socialsolutions.com") {
	
	$env = "live";
	$lang = "en";
	$url = "http://" . $server;


// Local	
} else {
	
	$env = "local";
	$lang = "en";
	$url = "http://" . $server . ":8888/ssg-2017";
	
}