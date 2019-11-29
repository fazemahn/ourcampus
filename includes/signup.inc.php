<?php
  require 'dbhandler.inc.php';
  //on signup create the entry required in table users
  $u= $_POST['uname'];
  $p= $_POST['passwd'];
  /*
  RUN THIS CODE TO CREATE THE TABLE:
  $sql = "CREATE TABLE testUsers (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  userName VARCHAR(30) NOT NULL,
  passWord VARCHAR(30) NOT NULL,
  notes VARCHAR(250)
  )";
  */
  $sql = "INSERT INTO testUsers (userName, passWord, notes)
    VALUES ('$u', '$p', 'john@example.com')";
  $sql1 = "CREATE TABLE $u (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  mon INT(6),
  tue INT(6),
  wed INT(6),
  thu INT(6),
  fri INT(6)
  )";
  if (mysqli_query($conn, $sql)&& mysqli_query($conn, $sql1)){
    header("Location: ../index.php?signup=success");
    exit();
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  mysqli_close($conn);

 ?>
