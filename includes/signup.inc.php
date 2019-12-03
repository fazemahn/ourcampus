<?php
  require 'dbhandler.inc.php';
  //on signup create the entry required in table users
  $u= $_POST['uname'];
  $p= $_POST['passwd'];

  $sql = "INSERT INTO testUsers (userName, passWord, notes)
    VALUES ('$u', '$p', '')";
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
