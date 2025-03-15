<?php
	session_start();
	$id=$_REQUEST["id"];

	$server_name = "DESKTOP-CU1U64A";
	$connection_info=array("Database" =>"PD_212", "UID" => "PHP", "PWD" => "111", "CharacterSet" => "UTF-8");

	$connection = sqlsrv_connect($server_name, $connection_info);


	$query="SELECT 
	teacher_id,
	FORMATMESSAGE(N'%s %s %s',last_name, first_name, middle_name) AS full_name,
	convert(varchar(25), birth_date, 121) AS birth_day,
	DATEDIFF(DAY,work_since,GETDATE())/365  AS works_from
	FROM Disciplines
	JOIN TeachersDisciplinesRelation	ON (discipline=discipline_id)
	JOIN Teachers						ON (teacher=teacher_id)
	WHERE discipline_id={$id};
	";
	$result = sqlsrv_query($connection,$query);	
	while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)){
		echo '<tr>';
		echo '<td>';
		echo $row['teacher_id'];
		echo '</td>';
		echo '<td>';
		echo $row['full_name'];
		echo '</td>';
		echo '<td>';
		echo $row['birth_day'];
		echo '</td>';
		echo '<td>';
		echo $row['works_from'];
		echo '</td>';
		echo '</tr>';
	}
	sqlsrv_close($connection);
?>