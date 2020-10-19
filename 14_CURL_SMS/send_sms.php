<?php 

$url = "http://66.45.237.70/api.php";
$number = "8801955778822";
$text = "Thank you for your payment.";
$data= array(
'username' => "markgroup",
'password' => "",
'number' => "$number",
'message' => "$text"
);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$smsResult = curl_exec($ch);
$result = explode("|", $smsResult);
$sendStatus = $result[0];

if($sendStatus = "1101")
	echo "SMS Sent";

