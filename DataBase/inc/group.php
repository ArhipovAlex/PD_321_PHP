<?php
	require_once __DIR__.'/connection.php';
	//print_r($_REQUEST);

	//function get_teacher_from_base($id)
	{
		$query = 
"SELECT group_id, group_name, direction_name, COUNT(stud_id) AS stud_count
FROM Students
RIGHT JOIN Groups ON ([group] = group_id)
JOIN Directions ON (direction = direction_id)
WHERE group_id={$_REQUEST['id']} 
GROUP BY group_id,group_name,direction_name
";
		$result = sqlsrv_query($connection, $query);
		if($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC))
		{
			echo "<h1>{$row['group_name']}</h1>";
			echo "<h3>{$row['direction_name']}</h3>";
			echo "<h3>ID: {$row['group_id']}</h3>";
			echo "<h3>Кол-во студентов: {$row['stud_count']}</h3>";
		}
	}
?>