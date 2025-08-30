<?php
$name = "XYZ";
$marks = [40,30,45,48,34];
$total = array_sum($marks);
$percentage = ($total/250)*100;

echo "<h2>Name: $name</h2>";
echo "<table border='1' cellpadding='5'>
<tr><th>Subject Name</th><th>Max Marks</th><th>Obtained Marks</th></tr>";

for($i=0;$i<5;$i++){
  echo "<tr><td>Sub".($i+1)."</td><td>50</td><td>".$marks[$i]."</td></tr>";
}

echo "<tr><td colspan='2'><b>Total</b></td><td>$total</td></tr>";
echo "<tr><td colspan='2'><b>Percentage</b></td><td>".round($percentage,1)."</td></tr>";

if($percentage>=75)
  $result="With Distinction";
elseif($percentage>=33)
  $result="Passed";
else
  $result="Failed";

echo "<tr><td colspan='2'><b>Result</b></td><td>$result</td></tr>";
echo "</table>";
?>