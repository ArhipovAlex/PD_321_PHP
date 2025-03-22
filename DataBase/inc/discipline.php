<?php
	require_once __DIR__.'/connection.php';
	$query = "SELECT * FROM disciplines WHERE discipline_id={$_REQUEST['id']}";
	$result = sqlsrv_query($connection, $query);
	if($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC))
	{
		echo "<h1>{$row['discipline_name']}</h1>";
	}
?>