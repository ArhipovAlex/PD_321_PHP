<?php
//setcookie('test','value',time()+3600);
//print_r($_COOKIE);
//echo 'Hello sessions';
session_name('ADMIN_SESSION');
session_start();
echo '<pre>';
echo session_save_path();
$_SESSION['user']='admin';
print_r($_SESSION);
//print_r($_SERVER);
echo '</pre>';
?>