<?php 
	require_once __DIR__ . '/data.php';
	//echo "Hello {$_POST['first_name']} {$_POST['last_name']}, удачи вам!";
	$count=0;
?>

<?php
if( isset($_POST['prev']) ) { 
    decrementClickCount();
}
if( isset($_POST['next']) ) { 
    incrementClickCount(count($questions));
}
function getClickCount()
{
    return (int)file_get_contents("clickit.txt");
}

function incrementClickCount($k)
{
    $count = getClickCount();
	if($count<$k-1){
		$count++;
		file_put_contents("clickit.txt", $count);
	}
}
function decrementClickCount()
{
    $count = getClickCount();
	if($count>0){
		$count--;
		file_put_contents("clickit.txt", $count);
	}
}
?>

<form action="result.php" method="post">
	<?php 
	//for($i=0;$i<count($questions); $i++):
	$i=getClickCount();
	?>
	<!--<form action="<?= htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post" name="<?= "form_question_{$i}"?>">-->
		
		<h3><?=$questions[$i]?></h3>
		<?php for($j=0;$j<count($answers[$i]);$j++):?>
			<input type="radio" name="<?="question_{$i}"?>" id="<?="{$i}_{$j}"?>" value="<?="{$i}_{$j}"?>">
			<label for="<?="{$i}_{$j}"?>"><?=$answers[$i][$j]?></label><br>
		<?php endfor ?>
	<!--</form>-->
	<?php //endfor ?>
	<input type="submit" value="Завершить тест">
</form>


<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
    <input type="submit" value="prev" name="prev">
</form>

<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
    <input type="submit" value="next" name="next">
</form>
<div>Click Count: <?php echo getClickCount(); ?></div>