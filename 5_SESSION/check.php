<?php 
session_start();

if( isset( $_SESSION["EMAIL_ID"] ) )
{
	echo "<pre>";
	print_r($_SESSION);
	echo "</pre>";
	
	echo "You are viewing Session Value above there...";
}
else
	header("Location: destroy.php");
?>

<br /><br /><a href="destroy.php">GO TO destroy.php TO DESTROY SESSION</a>
