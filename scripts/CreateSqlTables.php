<?php

define("DB_HOST", "localhost");
define("DB_USER", "zack");
define("DB_PASSWORD", "zacksql2245");
define("DB_NAME", "imustconfess");

// Create a plays table for a game
function createTables()
{
	$conn = mysql_connect (DB_HOST, DB_USER, DB_PASSWORD);
	mysql_select_db (DB_NAME);

	// Confessions Table
	$result = mysql_query("CREATE TABLE Confessions (
				id INT AUTO_INCREMENT PRIMARY KEY,
				src_ip INT,
				author TINYTEXT,
				title TINYTEXT,
				body TEXT,
				timestamp INT
				)");
	
	print mysql_error();
	
	// Confessions submitted Table
	$result = mysql_query("CREATE TABLE ConfessionsSubmitted (
					id INT AUTO_INCREMENT PRIMARY KEY,
					src_ip INT,
					author TINYTEXT,
					title TINYTEXT,
					body TEXT,
					timestamp INT
					)");
	
	print mysql_error();
	
	mysql_close($conn);
}

createTables();
?>