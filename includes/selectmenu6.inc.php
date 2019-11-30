<?php
session_start();
$_SESSION[selectItem] = 6;
header("Location: ../index.php?selId=6");
 ?>
