<h4>Here's what Friday looks like:</h4>
<script>
document.getElementById("mon").classList.remove('active');
document.getElementById("fri").classList.add('active');
</script>
<?php
require 'includes/dbhandler.inc.php';
$sql = "SELECT * FROM ".$_SESSION['UserName']." WHERE fri IS NOT NULL;";
$result = mysqli_query($conn, $sql);
//store all courses by id into $Courses array
if (mysqli_num_rows($result) > 0) {
    $Courses=array();
    while($row = mysqli_fetch_assoc($result)) {
      array_push($Courses,$row["fri"]);
      //print_r($Courses);
    }
} else {
    echo "You have no courses today! You have too much free time...";
}
$noCourses = count($Courses);
//generate table
for($x = 0; $x < $noCourses; $x++) {
    $sql = "SELECT * FROM courses WHERE courses.id=$Courses[$x]";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0){
      echo '<table class = "timeTable">';
      echo '<tr> <th>Course Name</th> <th>Location</th> <th>Starts(hrs)</th> <th>Ends(hrs)</th></tr>';
      while($row = mysqli_fetch_assoc($result)){
        echo '<tr><td>'.$row["coursename"].'</td><td>'.$row["location"].'</td><td>'.$row["start"].'</td><td>'.$row["finish"].'</td></tr>';
      }
      echo '</table>';
    }
}
mysqli_close($conn);
?>
