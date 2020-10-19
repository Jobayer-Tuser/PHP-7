<?php 
function ipCheck()
{
	if (!empty($_SERVER['HTTP_CLIENT_IP'])) // IP from Share Internet
	{
		$ip = $_SERVER['HTTP_CLIENT_IP'];
	}
	elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) // Whether IP is Pass from Proxy
	{
		$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
	}
	else
	{
		$ip = $_SERVER['REMOTE_ADDR'];
	}
	
	if($ip="::1")
		$ip = "127.0.0.1";
	
	return $ip;
}

?>

<?php 

echo ipCheck();

?>