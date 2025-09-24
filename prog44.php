<form method="post">
  1. PHP stands for? <br>
  <input type="radio" name="q1" value="1">Personal Home Page
  <input type="radio" name="q1" value="0">Private<br>

  2. Symbol for variable?<br>
  <input type="radio" name="q2" value="1">$ 
  <input type="radio" name="q2" value="0">#<br>

  3. Output function?<br>
  <input type="radio" name="q3" value="1">echo
  <input type="radio" name="q3" value="0">printText<br>

  <input type="submit" value="Submit">
</form>

<?php
if(isset($_POST['q1'])){
 $score = $_POST['q1']+$_POST['q2']+$_POST['q3'];
 echo "Score: $score / 3";
}
?>
