<?php
/* 

base64 is a 64 Bit Encryption. Encryption refers to:
Cypher-text = Keyword + Original-text;
You can make a Text Encrypted, and can revert it back to Decrypted (Regular) Text back

*/
$encoded = base64_encode("abc123");

echo $encoded . "<br /><br />";

echo base64_decode("YWJjMTIz");

?>