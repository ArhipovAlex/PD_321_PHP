<?php
echo "<h2>Выбранные цвета:</h2>";
if(array_key_exists('colors',$_POST)){
	//print_r($_POST);
	$colors = $_POST['colors'];
	foreach($colors as $color)
		echo $color.'<br>';
}
else {
	echo 'Цвета не выбраны';
}

?>