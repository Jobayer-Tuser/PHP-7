<?php session_start(); ?>
<html>
<body>

<?php
	session_destroy(); 
	
	echo "Here calling session_destroy() function the Session is Destroyed";
?>

<br /><br /><a href="check.php">GO TO check.php PAGE (You can't go because Session is Deleted here)</a>

<br /><br /><a href="start.php">GO TO start.php AND START SESSION</a>

</body>
</html>