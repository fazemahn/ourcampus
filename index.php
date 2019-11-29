<?php
require 'header.php' ?>
<main>
  <?php
  if (!isset($_SESSION['userID'])){
   require 'snippets/signupform.snip.php';
 }
 else {
   require 'snippets/userlanding.snip.php';
 }
  ?>
</main>
<?php require 'footer.php' ?>
