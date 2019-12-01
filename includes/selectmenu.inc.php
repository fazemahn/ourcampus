<?php
session_start();
$_SESSION['selectItem'] = $_GET['sets'];
header("Location: ../index.php?selid=1");
 ?>
