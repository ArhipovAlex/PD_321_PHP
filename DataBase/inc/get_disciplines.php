<?php



	$server_name = "DESKTOP-CU1U64A";
	$connection_info = array("Database"=>"PD_212", "UID"=>"PHP", "PWD"=>"111", "CharacterSet"=>"UTF-8");
	$connection = sqlsrv_connect($server_name, $connection_info);

	$query="SELECT
	discipline_id,
	discipline_name
	FROM Disciplines;
	";

	$result = sqlsrv_query($connection, $query);

	while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)){
		echo "<option value=\"{$row['discipline_id']}\">{$row['discipline_name']}</option>";
	}
	sqlsrv_close($connection);

?>