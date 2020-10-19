<?php
if(@$_REQUEST['exit'] == "yes")
{
	session_start() ;
	session_destroy() ;
	header("Location: index.php");
}

if(empty($_SESSION['ABC_login_login_time']) || empty($_SESSION['ABC_login_id']))
{
	session_destroy;
	header("Location: index.php");
}