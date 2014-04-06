<?php
	session_start();
	require_once ("../system/settings.php");
	require_once("../system/db_login.php");
	$conn =  dbconnect($dbconn);

	if (isset($_SESSION['username'])) {
		unset($_SESSION['username']);
	}
?>