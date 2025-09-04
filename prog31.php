<?php
$students=["Rahul"=>85,"Renu"=>90,"Amit"=>75];
$students["Amit"]=95;//update marks
foreach($students as $name =>$marks)
{
    echo"$name :$marks<br>";
}
?>
