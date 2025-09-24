<form method="post">
  <input type="radio" name="lang" value="PHP">PHP
  <input type="radio" name="lang" value="JS">JS
  <input type="radio" name="lang" value="Python">Python
  <input type="submit" value="OK">
</form>

<?php
if(isset($_POST['lang']))
 echo "Fav lang: ".$_POST['lang'];
?>
