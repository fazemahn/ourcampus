<?php
session_start();
$_SESSION[selectItem] = 5;
header("Location: ../index.php?selId=5");
 ?>
