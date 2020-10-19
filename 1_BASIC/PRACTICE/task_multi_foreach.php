<?php
$shop = array(
				array(
						array("nirjhor", 1.25, 15),
						array("daisy", 0.75, 25),
						array("orchid", 1.15, 7) 
                   ),
				array(
						array("rose", 1.25, 15),
						array("daisy", 0.75, 25),
						array("orchid", 1.15, 7) 
                   ),
				array(
						array("anjum", 1.25, 15),
						array("daisy", 0.75, 25),
						array("orchid", 1.15, 7) 
                   )
             );

foreach($shop[1] AS $index => $value) {
	foreach($value AS $index1 => $value1) {
		echo $index1 . " -> " . $value1 . "<br />";
	}
}
?>