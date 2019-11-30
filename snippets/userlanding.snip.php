<div class="leftPanel">
  <ul id= panelBar>
    <li><a class="active" id ="mon" href="includes/selectmenu1.inc.php">Monday</a></li>
    <li><a id ="tue" href="includes/selectmenu2.inc.php">Tuesday</a></li>
    <li><a id ="wed" href="includes/selectmenu3.inc.php">Wednesday</a></li>
    <li><a id ="thu" href="includes/selectmenu4.inc.php">Thursday</a></li>
    <li><a id ="fri" href="includes/selectmenu5.inc.php">Friday</a></li>
    <li><a id ="chat" href="includes/selectmenu6.inc.php">Chat</a></li>
  </ul>
</div>
<div class="rightPanel welcomeMessage">
  <h4>Welcome <?php echo ($_SESSION['UserName']); ?></h4>
  <?php
  switch ($_SESSION['selectItem']) {
    case 1:
        require 'snippets/monday.snip.php';
        break;
    case 2:
        require 'snippets/tuesday.snip.php';
        break;
    case 3:
        require 'snippets/wednesday.snip.php';
        break;
    case 4:
        require 'snippets/thursday.snip.php';
        break;
    case 5:
        require 'snippets/friday.snip.php';
        break;
    case 6:
        require 'snippets/chat.snip.php';
        break;
    default:
        echo (error);
      }
  ?>
</div>
