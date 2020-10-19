<?php 
session_start();

include("class/SSLCommerz.php");

################### PAYMENT INTEGRATION ###################
if ($_SERVER['SERVER_NAME'] == "localhost") {
    $server_name = 'http://localhost/SSLCOMMERZ/';
} else {
    $server_name = 'http://www.supermarket.com/';
}

$post_data = array();
$post_data['total_amount'] = 10000;
$post_data['currency'] = "BDT";
$post_data['tran_id'] = 123;
$post_data['success_url'] = $server_name . "status.php"; # http://localhost/SSLCOMMERZ/status.php
$post_data['fail_url'] = $server_name . "status.php"; # http://localhost/SSLCOMMERZ/status.php
$post_data['cancel_url'] = $server_name . "status.php"; # http://localhost/SSLCOMMERZ/status.php

# CUSTOMER INFORMATION
$post_data['cus_name'] = "Nirjhor Anjum";
$post_data['cus_email'] = "nirjhor.ajum@gmail.com";
$post_data['cus_add1'] = "Dhaka, Bangladesh";
$post_data['cus_add2'] = "";
$post_data['cus_city'] = "";
$post_data['cus_state'] = "";
$post_data['cus_postcode'] = "";
$post_data['cus_country'] = "Bangladesh";
$post_data['cus_phone'] = "8801955778822";
$post_data['cus_fax'] = "";

# SHIPMENT INFORMATION
$post_data['ship_name'] = "Nirjhor Anjum";
$post_data['ship_add1 '] = "Dhaka, Bangladesh";
$post_data['ship_add2'] = "";
$post_data['ship_city'] = "";
$post_data['ship_state'] = "";
$post_data['ship_postcode'] = "";
$post_data['ship_country'] = "Bangladesh";

# OPTIONAL PARAMETERS
$post_data['value_a'] = "ref001";
$post_data['value_b'] = "ref002";
$post_data['value_c'] = "ref003";
$post_data['value_d'] = "ref004";


$_SESSION['payment_values'] = array();
$_SESSION['payment_values']['tran_id'] = $post_data['tran_id'];
$_SESSION['payment_values']['amount'] = $post_data['total_amount'];
$_SESSION['payment_values']['currency'] = $post_data['currency'];


    $sslc = new SSLCommerz();
    # initiate(Transaction Data , Whether redirect or Display in Page)
    $payment_options = $sslc->initiate($post_data, false);

    if (!is_array($payment_options)) 
    {
        print_r($payment_options);
        $payment_options = array();

        echo '<h3>Card Payment</h3>';
        echo "<ul class='payOptions'>";

        if (array_key_exists("cards", $payment_options) && !empty($payment_options['cards'])) 
        {
            foreach ($payment_options['cards'] as $row) {
                echo '<li>' . $row['link'] . '</li>';
            }
        }
        echo "</ul>";
        echo '<h3>Mobile Payment</h3>';
        echo "<ul class='payOptions'>";
        if (array_key_exists("mobile", $payment_options) && !empty($payment_options['mobile'])) {
            foreach ($payment_options['mobile'] as $row) {
                echo '<li>' . $row['link'] . '</li>';
            }
        }
        echo "</ul>";
        echo '<h3>Internet Banking</h3>';
        echo "<ul class='payOptions'>";
        if (array_key_exists("internet", $payment_options) && !empty($payment_options['internet'])) {
            foreach ($payment_options['internet'] as $row) {
                echo '<li>' . $row['link'] . '</li>';
            }
        }
        echo "</ul>";
        echo '<h3>Other Options</h3>';
        echo "<ul class='payOptions'>";
        if (array_key_exists("others", $payment_options) && !empty($payment_options['others'])) {
            foreach ($payment_options['others'] as $row) {
                echo '<li>' . $row['link'] . '</li>';
            }
        }
        echo "</ul>";
    }

################### PAYMENT INTEGRATION ###################