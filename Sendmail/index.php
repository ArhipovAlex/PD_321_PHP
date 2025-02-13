<?php
	$to='arhipovyh@yandex.ru';
	$subject='Privet iz PHP';
	$message='Это тестовое сообщение из PHP';
	$headers=
	'From: kovtun_ol@t.top-academy.ru'. "\r\n".
	'Reply-To: kovtun_ol@t.top-academy.ru'. "\r\n".
	'X-Mailer: PHP/' . phpversion();
	echo mail($to,$subject,$message,$headers);

?>