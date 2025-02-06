<form action="index.php" method="post">
	<h1>Ваш любимый цвет</h1>
	<?php
		$keys=array_keys(COLORS);
		$values=array_values(COLORS);
	?>
	<select name="color" id="color">
		<option value="" disabled selected>--CHOOSE COLOR--</option>
		<!--<option value="black">Black</option>
		<option value="red">Red</option>
		<option value="green">Green</option>
		<option value="blue">Blue</option>
		<option value="white">White</option>-->
		<?php

			for($i=0;$i<count(COLORS);$i++)
			echo "<option value=\"$keys[$i]\">$values[$i]</option>"
		?>
	</select>
	<input type="submit" value="Submit">
</form>