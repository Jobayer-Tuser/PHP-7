<?php
 echo "This Script is Developed by: NIRJHOR ANJUM, you are not authorized to customize it.<br /><br />";
 echo "<b>Hostname:</b> ". @php_uname(n) ."\n";
 echo "<br /><br />";
 if (function_exists( 'shell_exec' )) {
  echo "<b>Hostname</b>: ". @gethostbyname(trim(`hostname`)) . "\n";
  echo "<br /><br />";
 } else {
  echo "<b>Server IP</b>: ". $_SERVER['SERVER_ADDR'] . "\n";
  echo "<br /><br />";
 }
 echo "<b>Platform</b>: ". @php_uname(s) ." ". @php_uname(r) ." ". @php_uname(v) ."\n";
 echo "<br /><br />";
 echo "<b>Architecture</b>: ". @php_uname(m) ."\n";
 echo "<br /><br />";
 echo "<b>Username</b>: ". get_current_user () ." ( UiD: ". getmyuid() .", GiD: ". getmygid() ." )\n";
 echo "<br /><br />";
 echo "<b>Curent Path</b>: ". getcwd () ."\n";
 echo "<br /><br />";
 echo "<b>Server Type</b>: ". $_SERVER['SERVER_SOFTWARE'] . "\n";
 echo "<br /><br />";
 echo "<b>Server Admin</b>: ". $_SERVER['SERVER_ADMIN'] . "\n";
 echo "<br /><br />";
 echo "<b>Server Signature</b>: ". $_SERVER['SERVER_SIGNATURE'] ."\n";
 echo "<br /><br />";
 echo "<b>Server Protocol</b>: ". $_SERVER['SERVER_PROTOCOL'] ."\n";
 echo "<br /><br />";
 echo "<b>Server Mode</b>: ". $_SERVER['GATEWAY_INTERFACE'] ."\n";
 echo "<br /><br />";
?>