<?php
include('phpgraphlib.php'); 
include('phpgraphlib_pie.php');

$graph = new PHPGraphLibPie(400, 200);

$data = array("Durjoy" => 20, "Hamid" => 20,"Mamun" => 20, "Tamjid" => 20, "Raoudan" => 20);

$graph->addData($data);

$graph->setTitle('Activity Share');
$graph->setLabelTextColor('blue');
$graph->setLegendTextColor('green'); // SIDE BAR COLOR
$graph->createGraph();
