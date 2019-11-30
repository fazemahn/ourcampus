<?php
require 'dbhandler.inc.php';

$sql = "CREATE TABLE testUsers (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
userName VARCHAR(30) NOT NULL,
passWord VARCHAR(30) NOT NULL,
notes VARCHAR(250)
)";
if (mysqli_query($conn, $sql)) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

$sql = "CREATE TABLE courses (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
coursename VARCHAR(30),
location VARCHAR(30),
start int,
finish int
)";
if (mysqli_query($conn, $sql)) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
 ?>
