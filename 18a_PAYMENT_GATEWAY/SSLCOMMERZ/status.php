<?php
session_start();

include("class/SSLCommerz.php");

################### PAYMENT VERIFICATION ###################
$sslc = new SSLCommerz();
$tran_id = $_SESSION['payment_values']['tran_id'];
$amount = $_SESSION['payment_values']['amount'];
$currency = $_SESSION['payment_values']['currency'];

$validation = $sslc->orderValidate($tran_id, $amount, $currency, $_POST);

if($validation == TRUE)
{
	echo "Payment Received Successfully";
}
else
{
	echo "Sorry' couldn't receive payment!";
}

################### PAYMENT VERIFICATION ###################