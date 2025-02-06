<?php
echo '<pre>';
//print_r($GLOBALS);
echo '<h1>Добро пожаловать '.$_POST['username'].', спасибо за регистрацию</h1>';
echo '<hr>';
var_dump($_POST['username']);
var_dump($_POST['email']);
echo '</pre>';
?>