<?php
require_once __DIR__ . '/point.php';
require_once __DIR__ . '/inheritance.php';
require_once __DIR__ . '/data.php';
require_once __DIR__ . '/functions.php';
//$A= new Point();
//классы исключительно ссылочные типы
//$A->set_X(1024);
//$A->set_Y(2048);
//echo "X = {$A->get_X()}, Y = {$A->get_Y()};";
//$A->info();
//методы класса всегда публичные
//$B = new Point(2,3);
//$B->info();

//$human = new Human('Antonio', 'Montana', 25);
//echo $human . '<br>';
//
//$student = new Student('Jessie', 'Pinkman', 25, 'Chemistry', 'WW_220', 95, 98);
//echo $student . '<br>';
//
//$teacher = new Teacher('Walter', 'White', 50, 'Chemistry', 25);
//echo $teacher . '<br>';
//
//$graduate = new Graduate('Hank', 'Schreider',40,'Criminalistic','OBN',80,60,'How to catch Heisenberg');
//echo $graduate . '<br>';

/*$group =
[
	new Student('Jessie', 'Pinkman', 25, 'Chemistry', 'WW_220', 95, 98),
	new Teacher('Walter', 'White', 50, 'Chemistry', 25),
	new Graduate('Hank', 'Schreider',40,'Criminalistic','OBN',80,60,'How to catch Heisenberg'),
	new Student('Tommy', 'Vercetty', 25, 'Thief', 'Vice', 95, 98),
	new Teacher('Ricardo', 'Diaz', 55, 'Weapon distruction', 20)
];

echo '<table>';
echo '<tr>';
echo '<th>First Name</th><th>Last Name</th><th>Age</th><th>Speciality</th><th>Info</th>';
echo '</tr>';
for ($i = 0; $i<count($group); $i++){
	//echo $group[$i] . '<hr>';
	echo '<tr>';
	echo "<td>{$group[$i]->get_first_name()}</td>";
	echo "<td>{$group[$i]->get_last_name()}</td>";
	echo "<td>{$group[$i]->get_age()}</td>";
	echo "<td>{$group[$i]->get_speciality()}</td>";
	echo '<td>';
	//if(get_class($group[$i])==="Student") 
	//	echo "Group:{$group[$i]->get_group()}, rating:{$group[$i]->get_rating()}, attendance:{$group[$i]->get_attendance()}";
	//if(get_class($group[$i])==="Teacher") 
	//	echo "Experience: {$group[$i]->get_experience()}";	
	//if(get_class($group[$i])==="Student") 
	//	echo "Group:{$group[$i]->get_group()}, rating:{$group[$i]->get_rating()}, attendance:{$group[$i]->get_attendance()}";
	echo $group[$i]->info();
	echo '</td>';
	echo '</tr>';
}
echo '</table>';*/

//$file=fopen("group.txt","w");
//for($i=0;$i<count($group); $i++){
//	fwrite($file,$group[$i]->csv(). ";\n");
//}
//fclose($file);
//save($group,"group.csv");
write("group.csv");
?>