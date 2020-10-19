<?php
/*

#### What is the htmlspecialchars() function ####

The htmlspecialchars() Function converts special characters to HTML entities. 
This means that it will replace HTML characters like < and > with &lt; and &gt;. 
This prevents attackers from exploiting the code by injecting HTML or JavaScript code (Cross-site Scripting Attacks) in forms.

*/
?>

<?php
$str = "You are hacked <b>XERO</b>!";
echo htmlspecialchars($str);
?>

<!-- HTML FORM INSIDE PHP -->