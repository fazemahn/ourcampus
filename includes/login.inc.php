<?php
require 'dbhandler.inc.php';
$recUname = $_POST['uname'];
$recPass = $_POST['pass'];
$sql = "SELECT * FROM testUsers WHERE userName = '$recUname' AND passWord = '$recPass';";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
session_start();
$_SESSION['userID'] = $row['id'];
$_SESSION['UserName'] = $row['userName'];
$_SESSION['Notes'] = $row['notes'];
$_SESSION['selectItem'] = 6;
header("Location: ../index.php?login=success");
exit();
mysqli_close($conn);
?>
