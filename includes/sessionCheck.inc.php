<?php
$targetDay = "chat";
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
?>
