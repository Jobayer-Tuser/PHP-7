<?php 

/*

md5 is a One Way Encryption, which is known as HASH. This HASH is not reversible back to its original Keyword.

*/

$password_saved_in_database = md5("abc123" . "piit");

$user_has_given_password_using_form = md5("abc123" . "piit");

if($password_saved_in_database == $user_has_given_password_using_form)
	echo "Password Matched...";

?>