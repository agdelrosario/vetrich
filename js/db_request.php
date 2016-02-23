<?php
	// Connect to the database.
	$host = "localhost";
	$user = "root";
	$pass = "";
	$databaseName = "ajax01";
	$con = mysql_connect($host,$user,$pass);
	$dbs = mysql_select_db($databaseName, $con);

	// Getting URL parameters.
	$id = $_GET['id'];
	$type = $_GET['type'];

	// Processing query.
	if ($type == 'prod_code')
		$query = "SELECT * FROM variables2 WHERE id_code=$id";
	else if ($type == 'prod_name')
		$query = "SELECT * FROM variables3 WHERE prod_name='$id'";
	else if ($type == 'description')
		$query = "SELECT some_data FROM variables2 WHERE name='$id'";

	// Getting query.
	$result = mysql_query($query);
	
	if ($type == 'description')
		$data = mysql_fetch_row($result);
	else
	{
		$data = array();
		while ($row = mysql_fetch_row($result))
			$data[] = $row;
	}
		
	// Encoding to output at the client.
	echo json_encode($data);
?>