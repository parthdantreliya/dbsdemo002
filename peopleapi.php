<?php
class $person
{
var $personID;
var $firstname;
var $lastname;
}
$items= array();
for($i=0;$i<10;$i++)
{
$personrecord = new person();
$personrecord->personID= $i; 
$personrecord->firstname= "Name $i";
$personrecord->firstname="LastName $i";
$items[i]= $personrecord;
}
header('Content-Type: application/json');
$jsonOutput= json_encode($items);
echo $jsonOutput;
?>
