<?php 
session_start();

$pdo = new PDO('mysql:host=localhost;dbname=amyitis', 'root', '');

if(!isset($_SESSION['userid'])) {
	die('Sie sind nicht angemeldet. <a href="../Formulare/form_login.php">Zum Login</a>');
}

$userid = $_SESSION['userid'];

if(isset($_GET['changeName'])) {
	$error = false;
	$email = $_POST['email'];
	
	if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		echo 'Bitte eine gültige Email-Adresse eingeben<br>';
		$error = true;
	}
	if(!$error) {
		$sql = $pdo->prepare("SELECT * FROM users WHERE email = '".$email."'");
		$result = $sql->execute(array('email' => $email));
		$user = $sql->fetch();
		
		if($user !== false) {
			echo 'Diese Email-Adresse ist bereits vergeben<br>';
			$error = true;
		}
	}

	if(!$error) {
		$sql = $pdo->prepare("UPDATE users SET email='".$email."' WHERE id='".$userid."'");
		$result = $sql->execute();
		
		if($result) {
			echo 'Email-Adresse erfolgreich geändert.';
		}
		else {
			echo 'Beim Ändern der Email-Adresse ist leider ein Fehler aufgetreten<br>';
		}
	}
}

$vorname = "";
$nachname = "";

$query = $pdo->query("SELECT vorname FROM `users` WHERE id='".$userid."'");
$fetch = $query->fetch();
$vorname = $fetch['vorname'];
$query = $pdo->query("SELECT nachname FROM `users` WHERE id='".$userid."'");
$fetch = $query->fetch();
$nachname = $fetch['nachname'];
?>

<!DOCTYPE html>
<html>

	<body>
		<p>User: <span id="player"><?php echo "" .$vorname. " " .$nachname. ""; ?></span><p><br>
		<p>Spielzeit: <span id="timePlayed"><?php //Hier werden die Spielzeiten aller Amyitis Runden des Spielers aus der DB geholt, zusammengerechnet und ausgegeben  ?></span></p><br>
		<p>Persönlicher Highscore: <span id="personalBest"><?php //Hier wird die Anzahl der Punkte der besten persönlichen Amyitis Runde des Spielers  aus der DB geholt, und ausgegeben ?></span></p><br>
		<p>Gesamtpunktzahl: <span id="allPoints"><?php //Hier werden die Punkte aller Amyitis Runden des Spielers aus der DB geholt, zusammengerechnet und ausgegeben?></span></p><br>
		<a href="Formulare/form_newPasswort.php">Passwort ändern</a>
		<form action="?changeName=1" method=post>
			<label for="email">Email-Adresse ändern*: </label><br>
			<input type="email" size="40" maxlength="250" name="email" required><br>
			
			<input type="submit" value="Submit">
		</form>
	</body>
</html>

