<?php
	require_once'functions.php';

	$filenames = get_filenames(__DIR__.'/files/201 RAW.txt');

	$IPs = [];
	$MACs = [];

	//read_addresses_from_file(__DIR__.'/files/201 RAW.txt', $IPs, $MACs);
	read_addresses_from_file($filenames['source'], $IPs, $MACs);

	echo '<pre>';
	print_r($IPs);
	print_r($filenames);
	echo '</pre>';

	write_addresses_to_file($filenames['WAL'], $IPs, $MACs);

	write_in_dhcpd_file($filenames['DHCPD'], $IPs, $MACs);

	print_table_from_file($filenames['WAL']);
?>