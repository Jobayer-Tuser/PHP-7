<!-- SAFE FILE DOWNLOAD -->
<?php

function safeDownload($fileLink, $downloadAs)
{
	$path = $fileLink;

	header("Pragma: public"); # PUBLIC FILE HANDLING
	header("Expires: 0"); # THE FILE WILL NOT EXPIRE
	header("Cache-Control: must-revalidate, post-check=0, pre-check=0"); # NO CACHING NEEDED
	header("Content-Type: application/force-download"); # YOU ARE FORCING TO DOWNLOAD THE FILE
	header("Content-Disposition: attachment; filename=" . $downloadAs); # FILE NAME, IN WHICH THE FILE WILL BE DOWNLOADED
	header( "Content-Description: File Transfer"); # JUST A DESCRIPTION
	header ("Content-type: octet/stream"); # BINARY STREAM
	@readfile($path); # PATH TO READ FILE
}

if(isset($_POST['download']))
	safeDownload("file/song.mp3", "nirjhor.mp3"); // EDIT THIS SECTION ONLY
?>

<form method="post" action="">
<button type="submit" name="download">Safe Download Here</button>
</form>
<!-- SAFE FILE DOWNLOAD -->


<!-- NORMALLY FILE DOWNLOAD -->
<a href="file/song.mp3">Download File Normally</a>
<!-- NORMALLY FILE DOWNLOAD -->