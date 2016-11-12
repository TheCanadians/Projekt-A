<!DOCTYPE html>
<html>

<body>
	<form action="../Formulare/newGame.php" method=post>
		<select name=numPlayer>
			<option value=2>2</option>
			<option value=3>3</option>
			<option value=4>4</option>
		</select>
		<input type=submit name=submit>
	</form>
	<?php 
	if(isset($_POST['submit'])){
		$selected_val = $_POST['numPlayer'];
		$numPlayer = intval($selected_val);
		echo '<form action="../Formulare/newGame.php method=post>';
		for ($i = 1; $i <= $numPlayer; $i++) {
			echo '<input type=text name=playerName value="Player 1">';
			echo '<label for=playerName>Spieler ' .$i. ':</label>';
			echo '<input type=radio name=human value=Mensch checked>Mensch ';
			echo '<input type=radio name=human value=KI checked>KI ';
			echo '<input type=color id=colorpicker value=#ff0000>';
		}
		echo '<button type=submit>Bestätigen</button>';
	}
	?>
	</body>
</html>