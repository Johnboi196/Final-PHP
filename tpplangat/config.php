<?php
$localhost = 'localhost';
$username = 'root';
$password = '';
$database = 'datapelajar';

$con = mysqli_connect($localhost, $username, $password, $database);

if (!$con) {
	echo "Connection failed!";
}
?>