<?php
$countries=
["India"=>"Delhi","USA"=>"Washington","UK"=>"London"];
$search= array_search("London",$countries);
if($search)
{
    echo "London found in $search";
}else{
    echo "Not found";
}