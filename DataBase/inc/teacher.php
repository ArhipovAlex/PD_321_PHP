<?php
	require_once __DIR__.'/connection.php';
	print_r($_REQUEST);

	//function get_teacher_from_base($id)
	{
		$query = "SELECT * FROM teachers WHERE teacher_id={$_REQUEST['id']}";
		$result = sqlsrv_query($connection, $query);
		if($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC))
		{
			//echo '<pre>';
			//print_r($row);
			//echo '</pre>';
			echo "<h1>{$row['last_name']} {$row['first_name']} {$row['middle_name']}</h1>";
			echo "Дата рождения: {$row['birth_date']->format('d.m.Y')}<br>";
			//$start_date = new DateTime($row['work_since']->format('Y-m-d'));
			//$end_date = new DateTime();
			//$interval = DateInterval::createFromDateString('1 year');
			//$daterange = new DatePeriod($start_date,$interval, $end_date);
			$daterange = date_diff(date_create($row['work_since']->format('d.m.Y')), date_create());
			//var_dump($interval);
			//var_dump($daterange);
			echo "Опыт преподавания: {$daterange->format('%Y years')}<br>";
		}
	}
?>