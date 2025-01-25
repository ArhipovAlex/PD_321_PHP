<DOCTYPE HTML>
<lang="ru">
<header>
<meta encoding="UTF-8">
	<title><?= $title;?></title>
</header>
<body>
	<h1><?= $title;?></h1>
	<!--<?php
		echo '<hr>';
		for($i=0;$i<count($array1);$i++)
			echo "$array1[$i]\t";
		echo '<hr>';
		foreach($array as $iterator)
		{
			echo "$iterator\t";
		}
		echo'<br>';
		foreach($array2 as $key => $value)
		{
			echo "array2[$key]:\t$value;\n";
		}
	?>
<pre>
<?=
	var_dump($array1);
		var_dump($array0);
		print_r($array2);
		print_r($array0);
	?>
</pre>
<?php
print_r($distances_to_sun);
echo $distances_to_sun['Earth'];
?>

<pre>
	<?php
		echo'<br>';
		//print_r($array2D);
		foreach($array2D as $iterator)
		{
			foreach($iterator as $iterator)
			{
				echo"$iterator\t";
			}
			echo'<br>';
		}
	?>
</pre>-->
<!--
	<?php
		
		array_unshift($array1,2);
		array_unshift($array1,1);
		$array1[]=340;
		array_push($array1,550);
		print_array($array1);
		$keys = array_keys($array1);
		print_array($keys);
		echo array_key_exists(50,$array1);
		echo in_array(13,$array1);

		array_pop($array1);
		array_pop($array1);
		array_shift($array1);
		array_shift($array1);
		print_array($array1);
		echo '<hr>';
		
		$array0 = array_merge($array1,$array2);
		print_array($array1);
		print_array($array2);
		print_array($array0);
		echo '<hr>';
		$array_spread = [...$array, ...$array0];
		print_array($array_spread);
		echo '<hr';
		echo '<h3>Arrays and variables</h3><br>';
		//$Mercury = $distance_to_sun['Mercury'];
		//$Venus = $distance_to_sun['Venus'];
		//$Earth = $distance_to_sun['Earth'];

		list
		(
			'Mercury' => $Mercury,
			'Venus' => $Venus,
			'Earth' => $Earth
		) = $distance_to_sun;
		echo "$Mercury<br>";
		echo "$Venus<br>";
		echo "$Earth<br>";

		[$zero, $first, $second, $third] = $array1;
		echo "$zero<br>";
		echo "$first<br>";
		echo "$second<br>";
		echo "$third<br>";

		[
			'Mars' => $Mars,
			'Jupiter' => $Jupiter,
		] = $distance_to_sun;

		echo "$Mars<br>";
		echo "$Jupiter<br>";

		[,,,$var1, $var2]=$array1;
		echo "$var1<br>";
		echo "$var2<br>";
	?>
	-->

	<!-- 
	sort(); - сортирует в порядке возрастания
	rsort(); - сортирует в порядке убывания
	ksort(); - сортирует ключи ассоциативного массива
	-->

	<?php
	rsort($array);
	print_array($array);
	?>

</body>