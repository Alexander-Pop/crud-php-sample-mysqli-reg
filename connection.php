<?php
/**
 * using mysqli_connect
 */

$databaseHost = 'localhost';
$databaseName = 'php_crud';
$databaseUsername = 'root';
$databasePassword = 'root';

$mysqli = mysqli_connect(
	$databaseHost, 
	$databaseUsername, 
	$databasePassword, 
	$databaseName
	); 
	
?>
