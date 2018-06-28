<?php
	$hostname = 'localhost';
	$username = 'root';
	$password = '';
	$db_name = 'grocery';
	$con = mysqli_connect($hostname, $username, $password, $db_name);
	if(!$con)
	die('Connection not established.!');				

?>