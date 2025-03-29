<?php

	require_once __DIR__ . "/../connection.php";
	require_once __DIR__ . "/../format_table.php";

	$query="SELECT
	discipline_id,
	discipline_name,
	number_of_lessons
	FROM Disciplines;
	";

	$result = sqlsrv_query($connection, $query);

	format_table($result);

	sqlsrv_close($connection);
?>