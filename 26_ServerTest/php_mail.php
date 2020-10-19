<html>
<script>
p{
font-family: Verdana;
}
</script>
<body>
<?php
if(isset($_REQUEST['mail_me']))
{
	$mail_id = trim($_REQUEST['mail_id']);
	echo "Mail Sent to : " . $mail_id . "... Now check your Mailbox...";
	$to      = $mail_id;
	$subject = 'PHP Mail is Working on your Server';
	$message = 'Hey, Your PHP Mailing System is working well. Thank you... Nirjhor Anjum';
	$headers = 'From: anjum@nirjhor.net' . "\r\n" .
		'Reply-To: anjum@nirjhor.net' . "\r\n" .
		'X-Mailer: PHP/' . phpversion();

	mail($to, $subject, $message, $headers);
}
?>

<form method="post" action="<?php $_SERVER['PHP_SELF']; ?>" >
<p>Put your Email Address to check PHP Mail: <input type="text" name="mail_id" />
<input type="submit" name="mail_me" value="Send Mail to Test"></p>
</form>
</body>
</html>