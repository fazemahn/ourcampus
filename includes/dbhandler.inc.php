<?php
$servername = "localhost";
$username_db = "root";
$password_db = "gunDamw1ng";
$dbname = "project1";

$conn = mysqli_connect($servername, $username_db, $password_db, $dbname);
if(!$conn) {
	$conn = mysqli_connect($servername, $username_db, $password_db);
	$sql = "CREATE DATABASE $dbname";
	if (!mysqli_query($conn, $sql)) {
    die();
	}
}
