<?php

	require_once __DIR__ . "/../connection.php";
	require_once __DIR__ . "/../format_table.php";

	//$query="SELECT
	//teacher_id,
	//last_name + ' ' + first_name + ' ' + middle_name AS full_name,
	//convert(varchar(25), birth_date, 121) AS birth_day,
	//DATEDIFF(DAY, work_since,GETDATE())/365 AS works_from
	//FROM Teachers;
	//";
	$query = "SELECT
		teacher_id,
		FORMATMESSAGE(N'%s %s %s', last_name, first_name, ISNULL(middle_name,N'')) AS 'full_name',
		CONVERT(VARCHAR(25),birth_date, 121) AS 'birth_date',
		DATEDIFF(DAY, work_since, GETDATE())/365 AS 'experience'
	FROM	Teachers";

	$result = sqlsrv_query($connection, $query);

	format_table($result);

	sqlsrv_close($connection);
?>