<?php
	$t = date("H");
	
	if ($t<"10")
	{
		echo "Have a good morning!";
	}
	else if ($t<"21")
	{
		echo "Have a good day!";
	}
	else
	{
		echo "Have a good night!";
	}
?>