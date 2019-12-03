<?php
session_start();
 ?>
 <div>
   <form action="includes/addCourse.inc.php" method="get">
     <fieldset>
       <legend>Add Courses</legend>
       <select name="addList">
         <?php
             $sql = "SELECT * FROM courses;";
             $result = mysqli_query($conn, $sql);
             if (mysqli_num_rows($result) > 0){
               while($row = mysqli_fetch_assoc($result)){
                 echo '<option value= "'.$row["id"].'">'.$row["coursename"].'</option>';
               }
             }
         ?>
       </select>
       <input type="submit" value="Add">
     </fieldset>
   </form>
 </div>

<div>
  <form action = "includes/removeCourse.inc.php" method = "get">
    <fieldset>
      <legend>Remove Courses</legend>
      <select name="removeList">
        <?php
        for($x = 0; $x < $noCourses; $x++) {
            $sql = "SELECT * FROM courses WHERE courses.id=$Courses[$x]";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0){
              while($row = mysqli_fetch_assoc($result)){
                echo '<option value= "'.$row["id"].'">'.$row["coursename"].'</option>';
              }
            }
        }
        ?>
      </select>
      <input type="submit" value="Remove">
    </fieldset>
  </form>
</div>

<div class="center">
  <form class="" action="includes/appendNotes.inc.php" method="post">
    <textarea name="notes" rows="10" cols="50">
<?php
  echo ($_SESSION['Notes']);
?>
    </textarea>
    <input type="submit" value="Save">
  </form>
</div>
