<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="main.css">
    <title>OurCampus Landing Page</title>
    <title></title>
  </head>
  <body>
    <header>
      <nav>
        <h2>OURCAMPUS</h2>
        <ul>
          <?php
          if (!isset($_SESSION['userID'])){
           require 'snippets/loginform.snip.php';
          }
          ?>
          <?php
          if (isset($_SESSION['userID'])){
            echo '<li><a href="includes/logout.inc.php">LOGOUT</a></li>';
          }
          ?>
        </ul>
     </nav>
  </header>
