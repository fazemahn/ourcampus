<?php
session_start();
$_SESSION[selectItem] = 4;
header("Location: ../index.php?selId=4");
 ?>
