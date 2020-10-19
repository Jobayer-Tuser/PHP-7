<?php

$order = array(
				"tax" => array(
								"tin_no" => "C292892838",
								"tax_amount" => "8500"
							),
				"order_id" => "TR1000",
				"quantity" => "10", 
				"product" => "Samsung Galaxy S Duos"
			);

echo "<pre>";
print_r($order);
echo "</pre><br />";

echo $order['tax']['tax_amount'];

?>