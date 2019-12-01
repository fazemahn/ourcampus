<?php
session_start();
require 'dbhandler.inc.php';
$targetCrsID = $_GET['addList'];
require 'sessionCheck.inc.php';
$sql = "INSERT INTO ".$_SESSION['UserName']." (".$targetDay.") VALUES (".$targetCrsID.");";
mysqli_query($conn,$sql);
header ("Location: ../index.php?add=done");
exit();
mysqli_close($conn);
?>
