<?php 
# GENERAL OPERATOR #

/*
Something that operates your Variables and Numbers are known as OPERATOR

There are different type of Operators:
	> Arithmetic Operators
	> Assignment Operators
	> Comparison Operators
	> Increment/Decrement Operators
	> Logical Operators
	> String Operators

*/

# ARITHMETIC OPERATOR

$x=10; 
$y=6;
echo ($x + $y); // outputs > 16
echo "<br />";
echo ($x - $y); // outputs > 4
echo "<br />";
echo ($x * $y); // outputs > 60
echo "<br />";
echo ($x / $y); // outputs > 1.6666666666667 
echo "<br />";
echo ($x % $y); // outputs > 4 
echo "<br />";

?>

<?php 
# ASSIGNMENT OPERATOR #

$x=10; 
echo $x; //// outputs > 10
echo "<br />";

$y=20; 
$y += 100; // $y = $y + 100
echo $y; //// outputs > 120 
echo "<br />";

$z=50;
$z -= 25; // $z = $z - 25.
echo $z; //// outputs > 25
echo "<br />";

$i=5;
$i *= 6; // $i = $i * 6
echo $i; //// outputs > 30
echo "<br />";

$j=10;
$j /= 5; // $j = $j / 5;
echo $j; //// outputs > 2
echo "<br />";

$k=15;
$k %= 4; //$k = $k % 4;
echo $k; //// outputs > 3
echo "<br />";
?>

<?php 
# COMPARISON OPERATOR
/*
	==		Compares Value
	===		Compares Value and Type
	!=		Not Equal
	<>		Not Equal
	!==		Not Equal in Value and Type
	>		Greater Than
	>=		Greather Than and Equal
	<		Less Than
	<=		Less Than and Equal
*/
?>

<?php
# LOGICAL OPERATOR

/* 
	&&
	||
*/
?>

<?php 
# INCREMENT DECREMENT OPERATOR #
	$n=1;
	
	$n++;
	$n--;
?>

<?php
# STRING OPERATOR #

$a = "Hello";
$b = $a . " world!";
echo $b; // outputs > Hello world! 
echo "<br />";

$x = "Hello";
$x .= " world!";
echo $x; // outputs > Hello world! 
echo "<br />";
?>