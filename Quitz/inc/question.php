﻿<?php
	require_once __DIR__.'/data.php';
	$number = $_REQUEST['q'];
	$answer;
	if(array_key_exists('a',$_REQUEST)){
		$answer=$_REQUEST['a'];
		$question_number = explode('_',$answer)[0];
		$user_answer = explode('_',$answer)[1];
		$user_answers[$question_number] = $user_answer;
		echo 'Answer: ';
		print_r($user_answer);
	}

	print_r($_REQUEST);
	if($number<count($questions))
	{
		echo $number;
		$response = "<h2>{$questions[$number]}</h2>";
		for($i=0;$i<count($answers[$number]);$i++)
		{
			$response .= "<input type=\"radio\" name=\"question_{$number}\" id=\"{$number}_{$i}\" value=\"{$number}_{$i}\">";
			$response .= "<label for=\"{$number}_{$i}\">{$answers[$number][$i]};</label><br>";
		}
		$response .= "<input type=\"button\" value=\"prev\" onclick=\"prevQuestion()\">";
		$response .= "<input type=\"button\" value=\"next\" onclick=\"nextQuestion()\">";
	}
	else{
		$response = "<h2>Вы ответили на все вопросы. Нажмите кнопку 'Submit' чтобы узнать результаты теста.</h2>";
		$response .= "<input type=\"submit\" value=\"Submit\" onclick=\"nextQuestion()\">";
	}

	echo $response;
?>