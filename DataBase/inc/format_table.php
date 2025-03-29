<?php
	function format_table($result)
	{
		while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)){
			echo "<tr>";
			foreach($row as $col){
				echo '<td>';
				echo $col;
				echo '</td>';
			}
			echo '<td>';
			$record = explode('_', array_keys($row)[0])[0];
			$filename = $record . '.php';
			$id = $record . '_id';
			echo "<a href=\"{$filename}?id={$row[$id]}\">Подробно</a>";	
			echo '</td>';
			echo "</tr>";
		}
	}
?>