
<?php
$file = fopen("files/mail.txt", "r") or exit("Unable to open file!");
# Output a line of the File until the End is reached
while( !feof($file) ) 
{
	echo fgets($file). "<br>"; # FEOF = Function (to check) End of File
}
fclose($file);

?>