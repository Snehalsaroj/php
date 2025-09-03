<?php
$arr=[30,10,50,60,20];
sort($arr); //ascending
echo "Ascending:";
foreach($arr as $v){echo "$v ";}
rsort($arr);//descending
echo"<br>Descending:";
foreach ($arr as $v){echo "$v ";}
?>