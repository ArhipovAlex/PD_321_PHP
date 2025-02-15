<?php
	$srcfilename=__DIR__ . "/files/201 RAW.txt";
	//echo file_exists($filename);
	//$srcfile = fopen($srcfilename, 'r');
	$array = file($srcfilename);
	echo '<pre>';
	print_r($array);
	echo '</pre>';
	//fclose($srcfile);

	$IPs = [];
	$MACs = [];

	for($i=0;$i<count($array);$i++)
	{
		$subs = explode(' ',$array[$i]);
		$ip=$subs[array_key_first($subs)];
		$mac=$subs[array_key_last($subs)];
		$mac = str_replace("\n",'',$mac);
		echo '<pre>';
		//print_r($subs);
		echo "$mac\t$ip";
		echo '</pre>';

		$IPs[] = $ip;
		$MACs[] = $mac;
	}

	echo '<pre>';
	print_r($IPs);
	echo '</pre>';

	$dst_filename=__DIR__.'/files/201.WAL';
	$dst_file=fopen($dst_filename, 'w');

	for($i=0;$i<count($MACs);$i++)
	{
		fwrite($dst_file,"{$MACs[$i]}\t{$IPs[$i]}\n");
	}

	fclose($dst_file);

	$wal_filename = __DIR__ . '/files/201.WAL';
	//$wal_file = fopen($wal_filename, 'r');
	$content = file($wal_filename);
	echo '<table border cellspacing="0">';
		echo '<tr>';
			echo '<th>';
			echo 'MAC address';
			echo '</th>';
			echo '<th>';
			echo 'IP address';
			echo '</th>';

				for($i=0; $i<count($content); $i++)
				{
					echo '<tr>';
					echo '<td>';
						echo explode("\t",$content[$i])[0];
					echo '</td>';
					echo '<td>';
						echo explode("\t",$content[$i])[array_key_last(explode("\t",$content[$i]))];
					echo '</td>';
					echo '</tr>';
				}

		echo '</tr>';
	echo '</table>';

	//fclose($wal_file);
?>