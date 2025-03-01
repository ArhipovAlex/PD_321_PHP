<?php

class Point
{//переменные внутри класса обязательно с модификатором доступа
	private $x;
	private $y;
//для доступа к переменным используются get и set методы 
	function get_X()
	{
		return $this->x;
	}
	function get_Y()
	{
		return $this->y;
	}
//обращаться к полям объекта можно через оператор ->, после которого $ нет
//к переменным члена класса внутри класса обращаться только через $this
	function set_X($x)
	{
		$this->x=$x;
	}
	function set_Y($y)
	{
		$this->y=$y;
	}
	//constructors
//в php конструктор называют ключевым словом function __construct()
//если не описано ни одного конструктора интерпретатор неявно добавляет по умолчанию
//но это конструктор сразу удаляется из класса если описан параметризованный конструктор

	function __construct($x=0,$y=0)
	{
		$this->set_X($x);
		$this->set_Y($y);
		echo "Constructor:\t<br>";
	}
	function __destruct()
	{
		echo "Destructor:\t<br>";
	}

	function __tostring()
	{
		return 'Point';
	}

	function info()
	{
		if($this->x == null && this->y == null)
		echo 'Point is uninitialized';
		else echo "X = {$this->x}, Y = {$this->y};";
	}
}
 
$A= new Point();
//классы исключительно ссылочные типы
$A->set_X(1024);
$A->set_Y(2048);
//echo "X = {$A->get_X()}, Y = {$A->get_Y()};";
$A->info();
//метобы класса всегда публичные
$B = new Point(2,3);
$B->info();
?>