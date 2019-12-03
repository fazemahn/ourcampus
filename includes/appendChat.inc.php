<?php
session_start();
$myfile = fopen("chattext.txt", "a") or die("Unable to open file!");
$txt = $_POST['msg'];
$from = $_SESSION['UserName'];
$final = "$from : $txt".PHP_EOL;
fwrite($myfile, $final);
fclose($myfile);
header("Location: ../index.php?sent=success");
?>
