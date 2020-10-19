<?php
# To Check Both Value and String Keep the Below Variable active
$int = "5";

# To Check Both Value Keep the Below Variable active
$int = 5;

if(
	isset($int) && 
	(filter_var($int, FILTER_VALIDATE_INT) === 0 && 
	!filter_var($int, FILTER_VALIDATE_INT) === false)
) 
{
	echo("Integer is Valid");
}
else 
{
	echo("Integer is not Valid");
}
?>