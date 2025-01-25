<?PHP

$title='Arrays';

$array=[0,1,1,2,3,5,8];
$array0=[];
$array1= array(3,5,8,13,21); //объ€вление массива через €вный вызов конструктора
$array2=[34,55,89,144]; //объ€вление через не€вный вызов конструктора
$array2[] = 233; //добавление в конец массива нового элемента
unset($array2[4]);

$arr_hw=[];

//$distance_to_sun['Mercury'] = 46000000;
//$distance_to_sun['Venus'] = 108000000;
//$distance_to_sun['Earth'] = 149000000;

$distance_to_sun =
[
	'Mercury' => 46000000,
	'Venus' => 108000000,
	'Earth' => 149000000,
	'Mars' => 249000000,
	'Jupiter' => 777000000,
	'Saturn' => 1430000000
];

$array2D=
[
	[0,1,1,2],
	[3,5,8,13,21],
	[34,55,89]
];

$arr_hw2D=[];
function print_array($array)
{
	echo '<pre>';
	//for($i=0;$i<count($array);$i++)
	//	echo "$array[$i]\t";
	foreach($array as $iterator)
		echo "$iterator\t";
	echo '</pre>';
}

function print_array_pre($array)
{
	echo '<pre>';
	print_r($array1);
	echo '</pre>';
}

function max_in_arr($arr)
{
	rsort($arr);
	return $arr[0];
}
function min_in_arr($arr)
{
	sort($arr);
	return $arr[0];
}
function sum_arr($arr)
{
	$sum=0;
	foreach($arr as $iterator)
		{
			$sum+=$iterator;
		}
	return $sum;
}
function avg_arr($arr)
{
	return sum_arr($arr)/count($arr);
}

function print_array2D($arr)
{
	foreach($arr as $iterator)
		{
			foreach($iterator as $iterator)
			{
				echo"$iterator\t";
			}
			echo'<br>';
		}
}
function max_in_arr2D($arr)
{
	$max=$arr[0][0];
	foreach($arr as $iterator)
		{
			foreach($iterator as $iterator)
			{
				if ($iterator>$max) $max=$iterator;
			}
		}
	return $max;
}
function min_in_arr2D($arr)
{
	$min=$arr[0][0];
	foreach($arr as $iterator)
		{
			foreach($iterator as $iterator)
			{
				if ($iterator<$min) $min=$iterator;
			}
		}
	return $min;
}
function sum_arr2D($arr)
{
	$sum=0;
	foreach($arr as $iterator)
	{
		$sum+=sum_arr($iterator);
	}
	return $sum;
}
function avg_arr2D($arr)
{
	$count=0;
	foreach($arr as $iterator)
	{
		$count+=count($iterator);
	}
	return sum_arr2D($arr)/$count;
}

require 'index.view.php';