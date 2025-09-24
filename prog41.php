<form method="post">
   Num1: <input type="number" name="n1"><br>
   Num2: <input type="number" name="n2"><br>
   <select name="op">
      <option>+</option>
      <option>-</option>
      <option>*</option>
      <option>/</option>
   </select>
   <input type="submit" value="Calculate">
</form>

<?php
if(isset($_POST['n1'])){
   $n1 = $_POST['n1'];
   $n2 = $_POST['n2'];
   $op = $_POST['op'];
   if($op=="+") echo "Result = ".($n1+$n2);
   if($op=="-") echo "Result = ".($n1-$n2);
   if($op=="*") echo "Result = ".($n1*$n2);
   if($op=="/") echo "Result = ".($n1/$n2);
}
?>