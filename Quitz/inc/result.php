<?php
//session_start();
require_once __DIR__.'/data.php';
echo '<pre>';
print_r($_POST);
print_r($_SESSION['user_answers']);
echo '</pre>';


//print_r($user_answers);

$asked_questions=array_keys($_SESSION['user_answers']);
$user_answers = array_values($_SESSION['user_answers']);
//$user_answers = array_values($_SESSION['user_answers']);
$score = 0;
for($i=0; $i<count($user_answers);$i++){
	//$origin_number = explode('_',$asked_questions[$i])[1];
	//$answer = explode('_',$user_answers[$i])[1];
	$origin_number = $asked_questions[$i];
	$answer = $user_answers[$i];
	if($answer == $correct_answers[$origin_number])$score++;
}
echo "Количество правильных ответов {$score}.";
//foreach($_POST as $user_answer){
//	$variant = explode('_',$user_answer);	
//}
echo "<form class="reload" action="login.php" method="post">";
echo "<br><input type=\"checkbox\" id=\"sendmessage\">";
echo "<label for=\"sendmessage\">Отправить результат теста на почту</label><br>";
echo "<br><input type=\"submit\" value=\"Завершить тест\">";
echo "</form>";
session_destroy();
?>