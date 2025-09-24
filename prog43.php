<form method="post">
  Name: <input type="text" name="name"><br>
  Email: <input type="email" name="email"><br>
  Msg: <textarea name="msg"></textarea><br>
  <input type="submit" value="Send">
</form>

<?php
if(isset($_POST['name']))
 echo "Thank you, ".$_POST['name']."! Feedback submitted.";
?>
