<?php
	require_once __DIR__.'/header.html';
	require_once __DIR__.'/connection.php';
	$query = "SELECT * FROM disciplines WHERE discipline_id={$_REQUEST['id']}";
	$result = sqlsrv_query($connection, $query);
	if($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC))
	{
		echo "<h1>{$row['discipline_name']}</h1>";
		echo "Количество занятий: {$row['number_of_lessons']}";
		echo "<h3>Преподаватели:</h3>";
		echo '<div class="table-with-combobox" style="display:flex;justify-content:space-between;">';
		
		echo '<div>';
		echo '<table>';
			echo '<thead>';
			echo '</thead>';
			echo '<tbody id="table-teachers">';
				require_once __DIR__.'/get_teachers_for_discipline.php';
			echo '</tbody>';
		echo '</table>';
		echo '</div>';
		echo '<div style="margin-right:25px;text-align:right;">';
		echo '<select>';
		echo '<option value="0">';
		echo '-- Добавить преподавателя --';
		echo '</option>';
		require_once __DIR__ . '/get_teachers_to_combo.php';
		echo '</select>';
		echo '<br>';
		echo '<input type="button" value="Добавить" style="margin-top:10px;">';
		echo '</div>';
		echo '</div>';
	}
	require_once __DIR__.'/footer.html';
?>