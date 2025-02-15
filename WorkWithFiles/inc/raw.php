<?php
	$filename ='../files/201 RAW.txt';
	$file = fopen($filename,'r');
	//echo fread($file,filesize($filename));
	$array = explode(' ',fread($file,filesize($filename)));
	echo '<pre>';
	print_r ($array);
	echo '</pre>';
	fclose($file);
?>