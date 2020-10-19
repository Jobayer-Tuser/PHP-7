<?php

/*
Date is a Function that returns us Day/Month/Year/Time etc.
Through Date Function we pass some Parameters like: Y, m, d, h, i, s, A, j, w etc, which gives us different Results like:

Logic to Remember: Y m d H i s

Y = Year in 2014 Format
m = Month in Two Digit Format
d = Date in Two Digit Format
h = Hour in 12 Format / H = Hour in 24 Format
i = Minute in 59 Format
s = Second in 59 Format
j = Number of Day > 1 to 31 Format
w = Number of Day of a Week > 0 to 6 Format
A = AM or PM
*/

echo date("Y/m/d") . "<br>"; // Year Month Date
echo date("Y.m.d") . "<br>"; // Year Month Date
echo date("Y-m-d") . "<br>"; // Year Month Date

echo date("h:i:s A")  . "<br>"; // Hour Minute Second AM/PM

echo date("j") . "<br>"; // Number of Day of a Month > 1 to 31

echo date("w") . "<br>"; // Number of Day of a Week > 0 to 6


/* When we are sending DATETIME or DATE value from PHP we have to use the following */
echo date("Y-m-d H:i:s") . "<br>"; // DATETIME ???
echo date("Y-m-d"); // DATE ???

?>
