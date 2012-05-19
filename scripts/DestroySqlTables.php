<?php

define("DB_HOST", "localhost");
define("DB_USER", "zack");
define("DB_PASSWORD", "zacksql2245");
define("DB_NAME", "imustconfess");

function removeTables()
{
	$conn = mysql_connect (DB_HOST, DB_USER, DB_PASSWORD);
	mysql_select_db (DB_NAME);
	
	// Confessions Table
	$result = mysql_query("DROP TABLE Confessions");
	print mysql_error();
	
	// Confessions Submitted Table
	$result = mysql_query("DROP TABLE ConfessionsSubmitted");
	print mysql_error();
	
	mysql_close($conn);
}

removeTables();
?>