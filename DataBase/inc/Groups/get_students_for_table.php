<?php
	require_once __DIR__ . "/../connection.php";
	require_once __DIR__ . "/../format_table.php";
	$query="SELECT
	stud_id,
	last_name + ' ' + first_name + ' ' + middle_name AS full_name,
	convert(varchar(25), birth_date, 121) AS birth_day
	FROM Students
	";
	$result = sqlsrv_query($connection, $query);

	format_table($result);

	sqlsrv_close($connection);
?>