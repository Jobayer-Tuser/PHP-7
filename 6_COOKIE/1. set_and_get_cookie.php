<?php
$cookie_name = "user";
$cookie_value = "Nirjhor Anjum";

# setcookie(VARIABLE_NAME, VARIABLE_VALUE, TIME_TO_EXPIRE, DIRECTORY_FOR_COOKIE)
# In this example, 5 = 5 Second; Therefore, 86400 = 1 day
setcookie($cookie_name, $cookie_value, time() + 5, "/"); 

# This above code has created $_COOKIE['user'] Cookie-Variable
?>
<html>
<body>

<?php
if( !isset( $_COOKIE["user"] ) ) 
{
    echo "Cookie Named '" . $cookie_name . "' is not Set Properly!";
} 
else 
{
    echo "Cookie '" . $cookie_name . "' is Set Now!<br>";
    echo "Value is: " . $_COOKIE[$cookie_name];
}
?>

</body>
</html>