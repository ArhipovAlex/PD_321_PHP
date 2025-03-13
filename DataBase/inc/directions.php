<?php
//phpinfo();

$server_name = "DESKTOP-CU1U64A";
$connection_info = array("Database"=>"PD_212", "UID"=>"PHP", "PWD"=>"111", "CharacterSet"=>"UTF-8");

$query = "SELECT * FROM Directions;";
$connection = sqlsrv_connect($server_name, $connection_info);
var_dump($connection);

$result = sqlsrv_query($connection, $query);
//$result = $connection->query($query);

//if($result->num_rows>0)
//{
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
		//echo "direction_id:{$row["direction_id"]} - direction_name:{$row["direction_name"]};<br>";
		echo '<tr>';
		echo '<td>';
		echo $row["direction_id"];
		echo '</td>';
		echo '<td>';
		echo $row["direction_name"];
		echo '</td>';
		echo '<td>';
		echo '<pre>';
		var_dump($row);
		print_r($row);
		echo '</pre>';
		echo '</td>';
		echo '</tr>';
	}
	echo '</table>';
//}

echo '<pre>';
var_dump($result);
print_r($result);
echo '</pre>';

sqlsrv_close($connection);
//phpinfo();

?>