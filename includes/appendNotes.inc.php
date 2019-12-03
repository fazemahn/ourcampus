<?php
  session_start();
  require 'dbhandler.inc.php';
  //on signup create the entry required in table users
  $n= $_POST['notes'];
  $un = $_SESSION['UserName'];
  $sql = "UPDATE testUsers
        SET notes = '".$n."'
        WHERE userName = '".$un."';";
  echo "$sql";
  if (mysqli_query($conn, $sql)){
    header("Location: ../index.php?append=success");
    $_SESSION['Notes'] = $n;
    exit();
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  mysqli_close($conn);
 ?>
