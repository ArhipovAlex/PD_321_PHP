<?php
	$server_name="DESKTOP-CU1U64A";
	$connection_info = array("Database" => "PD_212", "UID" => "PHP", "PWD" => "111", "CharacterSet" => "UTF-8");
	$connection = sqlsrv_connect($server_name, $connection_info);

	//var_dump($connection);
?>