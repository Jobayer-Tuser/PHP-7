<html>
<body>
<?php
$html1 = "htaccess_test.html";
$html2 = "htaccess2_test.html";
$htaccess = ".htaccess";
$string1 = "<html><head><title>Hello</title></head><body>Hello World</body></html>";
$string2 = "<html><head><title>Hello</title></head><body>You have been redirected</body></html>";
$string3 = "redirect 301 /htaccess_test.html /htaccess2_test.html";
$handle1 = fopen($html1, "w");
$handle2 = fopen($html2, "w");
$handle3 = fopen($htaccess, "w");

fwrite($handle1, $string1);
fwrite($handle2, $string2);
fwrite($handle3, $string3);

$http = curl_init($_SERVER['SERVER_NAME'] . "/htaccess_test.html");
$result = curl_exec($http);
$code = curl_getinfo($http, CURLINFO_HTTP_CODE);

if($code == 301) {
    echo "<br /><h1 style=\"color:red;\">.htaccess Works</h1>";
} else {
    echo "<h1 style=\"color:red;\">.htaccess Doesn't Work</h1>";
}
?>
</body>
</html>