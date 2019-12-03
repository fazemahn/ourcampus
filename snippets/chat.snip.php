<h4>Chat</h4>
<script>
document.getElementById("chat").classList.add('active');
</script>
<?php
$myfile = fopen("includes/chattext.txt", "r+") or die("Unable to open file!");
while(!feof($myfile)) {
  echo fgets($myfile) . "<br>";
}
fclose($myfile);
?>
<div class="foot">
  <form class="" action="includes/appendChat.inc.php" method="post">
  <textarea name="msg" rows="2" cols="50"></textarea>
  <input type="submit" value="Send" name="Send">
  </form>
</div>
