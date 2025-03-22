<?php
	require_once __DIR__.'/connection.php';
	$query = "SELECT * FROM disciplines WHERE discipline_id={$_REQUEST['id']}";
	$result = sqlsrv_query($connection, $query);
	if($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC))
	{
		echo "<h1>{$row['discipline_name']}</h1>";
		echo "Количество занятий: {$row['number_of_lessons']}";
		echo "<h3>Преподаватели:</h3>";
		
		echo '<table>';
			echo '<thead>';
			echo '</thead>';
			echo '<tbody id="table-teachers">';
				require_once __DIR__.'/get_teachers_for_discipline.php';
			echo '</tbody>';
		echo '</table>';
	}
?>