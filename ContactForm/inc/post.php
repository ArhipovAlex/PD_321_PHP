<?php

$nickname = $_POST['nickname'];
$email = $_POST['email'] = filter_input(INPUT_POST,'email',FILTER_SANITIZE_EMAIL);
if($email){
	$email = filter_var($email,FILTER_SANITIZE_EMAIL);
	if(!($email))	$error['email']='Enter valid Eemail';
	else			$error['email']='Please enter Email';
}
$inputs['subject']=$subject=$_POST['subject'];
$inputs['message']=$message=$_POST['message'];

if($message || trim($message) ==='')
	$error['message'] = 'Please ented the message';
?>