<?php
$filename = '../files/WriteToFile.txt';
$file = fopen($filename,'w');
fwrite($file,'Hello files from PHP!\nThis is write Message');
echo 'File size: '.filesize($filename);
fclose($file);
?>