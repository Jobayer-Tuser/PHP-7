<?php
$file=fopen("files/mail.txt","r") or exit("Unable to open file!");
while (!feof($file)) # File -> End of File
{
	echo fgetc($file); # File Get By Character
}
fclose($file);
?>