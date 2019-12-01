<?php
session_start();
require 'dbhandler.inc.php';
$targetCrsID = $_GET['addList'];
require 'sessionCheck.inc.php';
$sql = "INSERT INTO ".$_SESSION['UserName']." (".$targetDay.") VALUES (".$targetCrsID.");";
$result = mysqli_query($conn,$sql);
header ("Location: ../index.php?add=done");
exit();
echo $sql;
mysqli_close($conn);
?>
