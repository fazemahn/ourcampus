<?php
$noCourses = count($Courses);
for($x = 0; $x < $noCourses; $x++) {
    $sql = "SELECT * FROM courses WHERE courses.id=$Courses[$x]";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0){
      echo '<table class = "timeTable">';
      echo '<tr> <th>Course Name</th> <th>Location</th> <th>Starts(hrs)</th> <th>Ends(hrs)</th></tr>';
      while($row = mysqli_fetch_assoc($result)){
        echo '<tr><td>'.$row["coursename"].'</td><td>'.$row["location"].'</td><td>'.$row["start"].'</td><td>'.$row["finish"].'</td></tr>';
      }
      echo '</table><br>';
    }
}
?>
