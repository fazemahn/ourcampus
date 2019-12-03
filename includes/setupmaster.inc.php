<?php
require 'dbhandler.inc.php';
if (isset($_GET['killChat'])){
$myfile = fopen("chattext.txt", "w") or die("Unable to open file!");
$txt = "Admin Cleared".PHP_EOL;
fwrite($myfile, $txt);
fclose($myfile);
}
if (isset($_GET['setAll'])){
  $sql = "CREATE TABLE testUsers (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  userName VARCHAR(30) NOT NULL,
  passWord VARCHAR(30) NOT NULL,
  notes VARCHAR(250)
  )";
  if (mysqli_query($conn, $sql)) {
      echo "Table testUsers created successfully";
  } else {
      echo "<script>console.log('Debug Objects: " . mysqli_error($conn) . "' );</script>";
  }

  $sql = "CREATE TABLE courses (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  coursename VARCHAR(30),
  location VARCHAR(30),
  start int,
  finish int
  )";
  if (mysqli_query($conn, $sql)) {
      echo "Table courses created successfully";
  } else {
      echo "<script>console.log('Debug Objects: " . mysqli_error($conn) . "' );</script>";
  }
}
if (isset($_GET['cname'])){
  $crsname = $_GET['cname'];
  $crsloc = $_GET['cloc'];
  $crsst = $_GET['cstart'];
  $crsfin = $_GET['cend'];
  echo "$crsname";
  $sql = "INSERT INTO courses (coursename, location, start, finish) VALUES ('$crsname', '$crsloc', '$crsst', '$crsfin')";
  if (mysqli_query($conn, $sql)) {
      echo "Added successfully";
  } else {
      echo "Error: " . mysqli_error($conn);
  }
}
mysqli_close($conn);
?>
<!DOCTYPE html>
<html>
<body>
  <form action = "setupmaster.inc.php" method = "get">
    <fieldset>
      <legend> set up courses </legend>
      <input type = "text" name= "cname" required>
      <input type = "text" name= "cloc" required>
      <input type = "text" name= "cstart" required>
      <input type = "text" name= "cend" required>
      <input type = "submit" value = "Add">
    </fieldset>
  </form>
  <form class="" action="setupmaster.inc.php" method="get">
    <fieldset>
      <legend>Set up Databases</legend>
      <input type="submit" name="setAll" value="Set">
    </fieldset>
  </form>
  <form class="" action="setupmaster.inc.php" method="get">
    <fieldset>
      <legend>Reset Chat</legend>
      <input type="submit" name="killChat" value="Set">
    </fieldset>
  </form>
</body>
</html>
