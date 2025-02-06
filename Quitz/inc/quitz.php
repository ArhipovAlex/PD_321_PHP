<?php 
	require_once __DIR__ . '/data.php';
	echo "Hello {$_POST['first_name']} {$_POST['last_name']}, удачи вам!";
?>

<form action="result.php" method="post">
	<?php for($i=0;$i<count($questions); $i++):?>
	<!--<form action="<?= htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post" name="<?= "form_question_{$i}"?>">-->
		<h3><?=$questions[$i]?></h3>
		<?php for($j=0;$j<count($answers[$i]);$j++):?>
			<input type="radio" name="<?="question_{$i}"?>" id="<?="{$i}_{$j}"?>" value="<?="{$i}_{$j}"?>">
			<label for="<?="{$i}_{$j}"?>"><?=$answers[$i][$j]?></label><br>
		<?php endfor ?>
	<!--</form>-->
	<?php endfor ?>
	<input type="submit" value="Отправить">
</form>
