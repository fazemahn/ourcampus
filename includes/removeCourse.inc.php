<?php
session_start();
require 'dbhandler.inc.php';
$targetCrsID = $_GET['removeList'];
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
echo "$targetDay";
$sql = "DELETE FROM ".$_SESSION['UserName']." WHERE ".$targetDay." = ".$targetCrsID.";";
$result = mysqli_query($conn,$sql);
header ("Location: ../index.php?remove=done");
exit();
mysqli_close($conn);
?>
