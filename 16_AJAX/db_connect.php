<?php

$conn1 = new PDO('mysql:host=localhost;dbname=sysdb;charset=utf8', 'root', '');
$conn1->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$conn1->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

?>