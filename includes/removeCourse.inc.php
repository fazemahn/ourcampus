<?php
session_start();
require 'dbhandler.inc.php';
$targetCrsID = $_GET['removeList'];
require 'sessionCheck.inc.php';
$sql = "DELETE FROM ".$_SESSION['UserName']." WHERE ".$targetDay." = ".$targetCrsID.";";
mysqli_query($conn,$sql);
header ("Location: ../index.php?remove=done");
exit();
mysqli_close($conn);
?>
