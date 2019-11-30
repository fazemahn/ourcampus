<?php
require 'dbhandler.inc.php';
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
