<?php


$title = 'PHP Functions';

function exchange(&$a,&$b)
{
	$buffer = $a;
	$a=$b;
	$b=$buffer;
}
function print_values($a,$b,$delimiter = ';')
{
	echo '<pre>';
    echo "$a\t$b$delimiter";
    echo '</pre>';
}
function sum_values(...$values)
{
	$sum=0;
	foreach($values as $iteration)
		$sum+=$iteration;
	return $sum;
}
function Fibonacci($n)
{
	if($n==1||$n==2) return 1;
	return Fibonacci($n-1)+Fibonacci($n-2);
}
function dec_to_bin($num)
{
	$bin=0;
	$k=1;
	while($num)
	{
		$bin+=($num%2)*$k;
		$k*=10;
		$num=intdiv($num,2);
	}
	return $bin;
}
function dec_to_hex($dec) 
 { 
     $sign = "";$h="";
     if( $dec < 0){ $sign = "-"; $dec = abs($dec); }

     $hex = Array( 0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5, 
                   6 => 6, 7 => 7, 8 => 8, 9 => 9, 10 => 'A', 
                   11 => 'B', 12 => 'C', 13 => 'D', 14 => 'E',    
                   15 => 'F' );
     do 
     { 
         $h = $hex[($dec%16)] . $h; 
         $dec = intdiv($dec,16); 
     } 
     while( $dec >= 1 );

     return $sign . $h; 
 }


require 'index.view.php';