<?php


function dbconnect($dbconn){
	$mysql = mysql_connect($dbconn["server"], $dbconn["username"], $dbconn["password"], $dbconn["dbname"]);
	if ($mysql["connect_errno"]){
		//Connection failure
		throw new Exception("Failed to connect to MySQL: ".$mysqli->connect_error);
	}
	mysql_select_db($dbconn["dbname"],$mysql)
		or die ("Unable to select database: " .mysql_error());
	return $mysql;
}

function dbclose($mysql){
	mysql_close($mysql);
}
	
//connection to many database at once with db will be handled in arrays of connections
?>