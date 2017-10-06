<?php
// / Sets a connection to the data base
$db = new PDO("mysql:host=localhost;dbname=jdavid_JHernandez;", "r2hstudent", "SbFaGzNgGIE8kfP");
try
	{
	// Queries the table I named Challenge 1
	$results = $db->query("SELECT Name FROM Challenge1");
	
	}
   // If there is a errow. It echos out something the user can understand.
catch(Exception $e)
	{
	echo "Bad query";
	}
// Built in fetchAll function that gets the associative array in the database.
$array = $results->fetchAll(PDO::FETCH_ASSOC);
?>


