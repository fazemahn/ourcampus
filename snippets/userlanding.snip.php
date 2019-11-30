<div class="leftPanel">
  <ul id= panelBar>
    <li><a class = "active" href="includes/selectmenu1.inc.php">Test</a></li>
    <li><a href="includes/selectmenu2.inc.php">Test</a></li>
    <li><a href="includes/selectmenu3.inc.php">Test</a></li>
    <li><a href="includes/selectmenu4.inc.php">Test</a></li>
    <li><a href="includes/selectmenu5.inc.php">Test</a></li>
    <li><a href="includes/selectmenu6.inc.php">Test</a></li>
  </ul>
</div>
<div class="rightPanel welcomeMessage">
  <h4>Welcome <?php echo ($_SESSION[UserName]); ?></h4>
  <?php
  switch ($_SESSION[selectItem]) {
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
