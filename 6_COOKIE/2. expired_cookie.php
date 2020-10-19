<?php
// set the expiration date to one hour ago
setcookie("user", "", time() - 3600);
?>
<?php
echo "Cookie 'user' is expired.";

echo $_COOKIE["user"];
?>
