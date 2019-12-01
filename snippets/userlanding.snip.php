<div class="leftPanel">
  <ul id= panelBar>
    <li><a id ="mon" href="includes/selectmenu.inc.php?sets=1">Monday</a></li>
    <li><a id ="tue" href="includes/selectmenu.inc.php?sets=2">Tuesday</a></li>
    <li><a id ="wed" href="includes/selectmenu.inc.php?sets=3">Wednesday</a></li>
    <li><a id ="thu" href="includes/selectmenu.inc.php?sets=4">Thursday</a></li>
    <li><a id ="fri" href="includes/selectmenu.inc.php?sets=5">Friday</a></li>
    <li><a id ="chat" href="includes/selectmenu.inc.php?sets=6">Chat</a></li>
  </ul>
</div>
<div class="rightPanel welcomeMessage">
  <h4>Welcome <?php echo ($_SESSION['UserName']); ?></h4>
  <?php
  if ($_SESSION['selectItem'] == 6){
    require 'snippets/chat.snip.php';
  }
  else {
    require 'snippets/days.snip.php';
  }
  ?>
</div>
