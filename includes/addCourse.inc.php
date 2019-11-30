<?php
session_start();
require 'dbhandler.inc.php';
$targetCrsID = $_GET['addList'];
switch ($_SESSION['selectItem']) {
  case 1:
      $targetDay = "mon";
      break;
  case 2:
      $targetDay = "tue";
      break;
  case 3:
      $targetDay = "wed";
      break;
  case 4:
      $targetDay = "thu";
      break;
  case 5:
      $targetDay = "fri";
      break;
  default:
      echo (error);
    }
$sql = "INSERT INTO ".$_SESSION['UserName']." (".$targetDay.") VALUES (".$targetCrsID.");";
$result = mysqli_query($conn,$sql);
header ("Location: ../index.php?add=done");
exit();
echo $sql;
mysqli_close($conn);
?>
