<?php
$fruits =["Apple"=>100,"Banana"=>40,"Mango"=>60];

asort($fruits);
echo "By Value:<br>";
foreach($fruits as $f=>$p)
{echo "$f:$p<br>";}

ksort($fruits); //by key
echo "By key:<br>";
foreach($fruits as $f=>$p)
{echo "$f:$p<br>";}
?>