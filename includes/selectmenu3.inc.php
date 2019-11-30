<?php
session_start();
$_SESSION[selectItem] = 3;
header("Location: ../index.php?selId=3");
 ?>
