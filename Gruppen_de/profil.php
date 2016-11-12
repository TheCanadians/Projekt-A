<!DOCTYPE html>
<html>

	<body>
		<p>Spielzeit: <span id="timePlayed"><?php //Hier werden die Spielzeiten aller Amyitis Runden des Spielers aus der DB geholt, zusammengerechnet und ausgegeben  ?></span></p><br>
		<p>Persönlicher Highscore: <span id="personalBest"><?php //Hier wird die Anzahl der Punkte der besten persönlichen Amyitis Runde des Spielers  aus der DB geholt, und ausgegeben ?></span></p><br>
		<p>Gesamtpunktzahl: <span id="allPoints"><?php //Hier werden die Punkte aller Amyitis Runden des Spielers aus der DB geholt, zusammengerechnet und ausgegeben?></span></p><br>
		<br>
		<a href="newPasswort.php">Passwort ändern</a>
		<form action="../Formulare/form_account.php" method=post>
			<input type=text name=accountname value=<?php //Aktuellen Account Namen aus der DB ausgeben ?> required>
			<label for=accountname>Accountnamen ändern*: </label>
			<button type=submit>Bestätigen</button>
		</form>
	</body>
</html>