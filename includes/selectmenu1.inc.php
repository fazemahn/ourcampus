<?php
session_start();
$_SESSION[selectItem] = 1;
header("Location: ../index.php?selId=1");
 ?>
