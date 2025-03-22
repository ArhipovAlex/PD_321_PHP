<?php
	session_start();
	$id=$_REQUEST["id"];
	if($id>0){
	require_once __DIR__ . "/connection.php";
	require_once __DIR__ . "/format_table.php";

	$query="SELECT
	discipline_id,
	discipline_name
	FROM Disciplines
	JOIN TeachersDisciplinesRelation	ON (discipline=discipline_id)
	JOIN Teachers						ON (teacher=teacher_id)
	WHERE teacher_id={$id};
	";
	$result = sqlsrv_query($connection,$query);

	format_table($result);

	sqlsrv_close($connection);
	} else{
		require_once __DIR__ . '/get_disciplines_for_table.php';
	}
?>