<?php
function get_filenames(string $filename):array
{
	$splitted_name=explode("/",$filename);
	$name = $splitted_name[array_key_last($splitted_name)];
	$number=(int)$name;
	//echo "<h1>{$number}</h1>";
	$filenames =
	[
		"source"=>$filename,
		"WAL"	=>__DIR__."/files/{$number}.WAL",
		"DHCPD"	=>__DIR__."/files/{$number}.dhcpd"
	];
	return $filenames;
}

function read_addresses_from_file(string $filename, array &$IPs, array &$MACs): void
{
	$srcfilename=$filename;
	//echo file_exists($filename);
	//$srcfile = fopen($srcfilename, 'r');
	$array = file($srcfilename);
	echo '<pre>';
	print_r($array);
	echo '</pre>';
	//fclose($srcfile);


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
}

function write_addresses_to_file(string $filename, array $IPs, array $MACs): void
{
	$dst_filename=$filename;
	$dst_file=fopen($dst_filename, 'w');

	for($i=0;$i<count($MACs);$i++)
	{
		fwrite($dst_file,"{$MACs[$i]}\t{$IPs[$i]}\n");
	}

	fclose($dst_file);
}

function write_in_dhcpd_file(string $filename, array $IPs, array $MACs): void
{
	$dst_filename=$filename;
	$dst_file=fopen($dst_filename, 'w');
	$splitted_name=explode("/",$filename);
	$name = $splitted_name[array_key_last($splitted_name)];
	$number=(int)$name;

	echo '<pre>';
	echo $number;
	echo '</pre>';
	for($i=0;$i<count($MACs);$i++)
	{
		$j=$i+1;
		$str="host {$number}-{$j}\n{\t hardware ethernet\t{$MACs[$i]};\n\t fixed-address\t{$IPs[$i]};\n}\n";
		fwrite($dst_file,$str);
	}
	fclose($dst_file);
}

function print_table_from_file(string $filename): void
{
	 	$wal_filename = $filename;
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
 }
?>