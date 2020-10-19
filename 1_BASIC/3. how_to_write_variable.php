<!DOCTYPE html>
<html>
<body>

<?php

$color = "red"; // $color is a Variable which is pointing a location in the Hard Disk, and a word/string "red" is kept in this location.
// When we will echo this Variable, it will show us the word/string that is stored in that Variable (which is pointed to a Location of Hard Disk

$color = "green";

echo "My car is " . $color . "<br>"; // This will print "red", because $color is a Variable which is Case-Sensitive
echo "My house is " . $COLOR . "<br>"; // This will print nothing.
echo "My boat is " . $coLOR . "<br>"; // This will print nothing.

$age = 12;

echo "$age";

?>

</body>
</html>