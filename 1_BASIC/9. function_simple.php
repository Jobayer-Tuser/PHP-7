<?php

/*
WHEN You get a KEYWORD with FIRST BRACKET [ Like: function() ] it is called as Function. Example: strlen("Nirjhor"); Here strlen() is a Function.
There are two types of Function:
1) PHP Built-in Function (Functions that the PHP Programming Language creators have developed and have given us for use)
2) Self Developed Function (Functions that are Developed by Us)

Function : Function is something that can do Multiple Tasks when the Function is Called. A Function can Receive value inside it, and Return a value to user.

Example of Receiving Value in Function : FunctionName($ReceivingValue) or FunctionName(4)
*/

function mySignature()
{
	$result = "IT 
	Training 
	Center<br />
	Dhaka,
	Bangladesh.";
	
	return $result;
}

echo mySignature();

?>