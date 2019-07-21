<?php
	$dbhost = 'localhost';
	$user = 'root';
	$password = '';
	$db = 'games';
	
	//Starts a connection, if there is no connection then the script dies.
	$connect = mysql_connect($dbhost, $user, $password) or die("Unable to connect!");
	mysql_select_db($db);
?>