<?php
	echo '<pre>';
	print_r($_FILES);
	//$fullpath = 'C:\\PHP\\' . $_FILES['file']['name'];
	$fullpath = __DIR__ . '\\..\\uploads\\' . $_FILES['file']['name'];
	$result = move_uploaded_file($_FILES['file']['tmp_name'],$fullpath);
	echo $result;
	echo '</pre>';
?>

<?php if($_FILES['file']['type'] === 'image/png'):?>
<img src="../uploads/<?= $_FILES['file']['name']?>">
<?php endif ?>
<?php if($_FILES['file']['type'] === 'audio/mpeg'):?>
	<audio controls id="player">
		<source src="../uploads/<?= $_FILES['file']['name']?>">
	</audio>
<?php endif ?>
<?php if($_FILES['file']['type'] === 'video/mp4'):?>
	<video src="../uploads/<?= $_FILES['file']['name']?>" width="480" height="270" poster="poster.gif" controls />

<?php endif ?>