<?php
	$server_name = "DESKTOP-CU1U64A";
	$connection_info = array("Database"=>"PD_212", "UID"=>"PHP", "PWD"=>"111", "CharacterSet"=>"UTF-8");
	$connection = sqlsrv_connect($server_name, $connection_info);

	$query = "SELECT 
teacher_id, 
FORMATMESSAGE(N'%s %s %s', last_name, first_name, ISNULL(middle_name,N'')) AS 'full_name'
	FROM Teachers;";
	$result = sqlsrv_query($connection, $query);

	while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)){
		echo "<option value=\"{$row['teacher_id']}\">{$row['full_name']}</option>";
	}

	sqlsrv_close($connection);
?>