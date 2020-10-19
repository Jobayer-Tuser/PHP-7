<?php
include('phpgraphlib.php');
$graph = new PHPGraphLib(520,280);

$xAxisData = array(1,2,3,4,5,6); // You are getting it From Excel
$yAxisData1 = array(90,78,50,50,80,50); // You are getting it From Excel
#$yAxisData2 = array(0,0,0,0,0,0); // You are getting it From Excel // TRY ONE
$yAxisData2 = array(11,22,21,23,44,80); // You are getting it From Excel // TRY TWO

$data = array_combine($xAxisData, $yAxisData1);
$data2 = array_combine($xAxisData, $yAxisData2);

$graph->addData($data, $data2); ###

$graph->setBarColor('blue', 'green'); ###
$graph->setupYAxis(12, 'blue');
$graph->setupXAxis(20);
$graph->setGrid(false);
$graph->setLegend(true);

$graph->setTitle('Bar Diagram'); ###
$graph->setTitleLocation('left');
$graph->setTitleColor('blue'); ###

$graph->setLegendOutlineColor('white');
$graph->setLegendTitle('Max On User', 'Max AC User');

$graph->setXValuesHorizontal(true);

$graph->createGraph();
?>

