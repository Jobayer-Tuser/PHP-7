<?php 
require_once('channel_feed.php');

$youtube = new ChannelFeed('Y2015uqSF1K-mo0gGuKM2w');
$vids = $youtube->showFullFeed();
$vidIDs = array_map("getYouTubeID",$vids); // $vidIDs = the List of your Video ID of your YouTube Channel

echo "<pre>";

foreach($vidIDs AS $ID)
{
	echo "
	<iframe width='420' height='320' frameborder='0' src='http://www.youtube.com/embed/$ID'>
	</iframe>
	";
}
?>