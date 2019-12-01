<?php
require 'includes/sessionCheck.inc.php';
require 'includes/dbhandler.inc.php';
echo '<h4>Here is what today looks like: </h4>';
$sql = "SELECT * FROM ".$_SESSION['UserName']." WHERE ".$targetDay." IS NOT NULL;";
$result = mysqli_query($conn, $sql);
//store all courses by id into $Courses array
if (mysqli_num_rows($result) > 0) {
    $Courses=array();
    while($row = mysqli_fetch_assoc($result)) {
      array_push($Courses,$row["$targetDay"]);
    }
} else {
    echo '<div class = "timeTable"><p>You have no courses today! You have too much free time...</p></div>';
}
require 'includes/tablegen.inc.php';
require 'includes/modifylist.inc.php';
mysqli_close($conn);
?>
<script>
document.getElementById("<?php echo "$targetDay" ?>").classList.add('active');
</script>
