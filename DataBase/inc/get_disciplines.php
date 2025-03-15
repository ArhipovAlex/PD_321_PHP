<?php
	echo "<label for=\"discipline_select\">Преподаваемая дисциплина</label>";
	echo "<select name=\"discipline\" id=\"discipline_select\">";
	echo "<option value=\"\">--</option>";

	$server_name = "DESKTOP-CU1U64A";
	$connection_info = array("Database"=>"PD_212", "UID"=>"PHP", "PWD"=>"111", "CharacterSet"=>"UTF-8");
	$connection = sqlsrv_connect($server_name, $connection_info);

	$query="SELECT
	discipline_name
	FROM Disciplines;
	";

	$result = sqlsrv_query($connection, $query);

	while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)){
		echo "<option value=\"{$row['discipline_name']}\">{$row['discipline_name']}</option>";
	}
	sqlsrv_close($connection);
	echo "</select>";
?>