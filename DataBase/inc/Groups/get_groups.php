<?php

require_once __DIR__ . "/../connection.php";
require_once __DIR__ . "/../format_table.php";

$query = "SELECT 
group_id,
group_name,
COUNT(stud_id) AS students_count,
direction_name
FROM Students 
RIGHT JOIN Groups ON ([group]=group_id)
JOIN Directions ON (direction=direction_id)
GROUP BY group_id,group_name,direction_name;";
$result = sqlsrv_query($connection, $query);

format_table($result);

sqlsrv_close($connection);
?>