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
          <li>
            <form class="" action="includes/login.inc.php" method="post">
              <input type="text" name="uname" placeholder="Username">
              <input type="password" name="pass" placeholder="Password">
              <input type="submit" name="login_submit" value="Login">
            </form>
          </li>
          <li class="postLogin"><a href="#">LOGOUT</a></li>
        </ul>
     </nav>
  </header>
