<?php 

$colors = array("red","green","blue","yellow"); 

# Memorizing Logic: Run FOREACH Loop for the ARRAY AS Key/Index and Value
$n = 0;
foreach($colors AS $index => $value)
{
	echo $value . "<br>";
	$n++;
}

echo $n;

?>