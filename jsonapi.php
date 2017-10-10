<?php
$items= array();
for($i=0; $i<10;$i++)
{
$items[$i]= "this is line $i";

}
header('Content-type: application/json');
$jsonOutput = json_encode($items);
echo $jsonOutput;
