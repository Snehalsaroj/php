<form method="get">
  Name: <input type="text" name="name"><br>
  Sub: <input type="text" name="sub"><br>
  Msg: <input type="text" name="msg"><br>
  <input type="submit" value="Send">
</form>

<?php
if(isset($_GET['name']))
 echo "Thank you ".$_GET['name'].", we will contact you soon!";
?>
