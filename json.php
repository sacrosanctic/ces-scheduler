<?php
	$host="localhost"; // Host name
	$username="root"; // Mysql username
	$password=""; // Mysql password
	$db_name="sakila"; // Database name

	$json = array();
	$actor = array();
	
	$con = mysql_connect("$host", "$username", "$password")or die("cannot connect");
	mysql_select_db("$db_name")or die("cannot select DB");
	
	$sql = "SELECT * FROM actor;";
	$result = mysql_query($sql);
	while($row = mysql_fetch_array($result))
	{
		$json[] = $row["first_name"] . " ". $row["last_name"];
	}
	if(!mysql_query($sql))
	{
		die('Error: ' . mysql_error());
	}

	header('Content-type: application/json');
	echo json_encode($json);
?>