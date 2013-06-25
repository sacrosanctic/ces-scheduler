<?php
	$host="localhost"; // Host name
	$username="root"; // Mysql username
	$password=""; // Mysql password
	$db_name="ces-scheduler"; // Database name

	$json = array();
	$actor = array();
	
	$con = mysql_connect("$host", "$username", "$password")or die("cannot connect");
	mysql_query("SET character_set_results=utf8",$con);
	mb_language('uni');
	mb_internal_encoding('UTF-8');
	mysql_select_db("$db_name",$con)or die("cannot select DB");
	mysql_query("set names 'utf8'",$con);
	
	mysql_query('SET character_set_results=utf8',$con);
	
	$sql = "SELECT FirstName FROM tbl_student;";
	$result = mysql_query($sql);
	while($row = mysql_fetch_array($result))
	{
		$json[] = $row["FirstName"];
	}
	if(!mysql_query($sql))
	{
		die('Error: ' . mysql_error());
	}

	header('Content-type: application/json; charset=utf-8');
	echo json_encode($json);
?>