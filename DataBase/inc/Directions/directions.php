<?php

require_once __DIR__ . "/../connection.php";

$query = "SELECT * FROM Directions;";


$result = sqlsrv_query($connection, $query);

	$row;
	echo '<table>';
		echo '<tr>';
			echo '<th>';
			echo 'ID';
			echo '</th>';
			echo '<th>';
			echo 'Направление обучения:';
			echo '</th>';
		echo '</tr>';
	while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)){
		echo '<tr>';
		echo '<td>';
		echo $row["direction_id"];
		echo '</td>';
		echo '<td>';
		echo $row["direction_name"];
		echo '</td>';
		echo '</tr>';
	}
	echo '</table>';

sqlsrv_close($connection);

?>