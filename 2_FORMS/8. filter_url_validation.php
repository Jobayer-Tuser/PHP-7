<?php

if(!filter_has_var(INPUT_GET, "url")) // INPUT_POST //
{
	echo "URL Didn't Received!";
}
else 
{
	if(filter_var($_GET['url'], FILTER_VALIDATE_URL) == true)
		echo "URL is Valid";
	else 
		echo "URL is Invalid";
}

?>

<form method="get" action="">
<input type="text" name="url" />
<input type="submit" value="Click Here" />
</form>