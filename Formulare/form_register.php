<?php
session_start();
$pdo = new PDO('mysql:host=localhost;dbname=amyitis', 'root', '');
?>

<!DOCTYPE html>
<html lang=de>
<head>
	<title>Registrierung</title>
</head>
<body>


<?php
$showFormular = true;

if(isset($_GET['register'])) {
	$error = false;
	$email = $_POST['email'];
	$passwort = $_POST['passwort'];
	$passwort_rep = $_POST['passwort_rep'];
	$vorname = $_POST['vorname'];
	$nachname = $_POST['nachname'];
	
	if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		echo 'Bitte eine gültige Email-Adresse eingeben<br>';
		$error = true;
	}
	if(strlen($passwort) == 0) {
		echo 'Bitte ein Passwort angeben<br>';
		$error = true;
	}
	if($passwort != $passwort_rep) {
		echo 'Die Passwörter müssen übereinstimmen<br>';
		$error = true;
	}

	if(!$error) {
		$sql = $pdo->prepare("SELECT * FROM users WHERE email = :email");
		$result = $sql->execute(array('email' => $email));
		$user = $sql->fetch();
		
		if($user !== false) {
			echo 'Diese Email-Adresse ist bereits vergeben<br>';
			$error = true;
		}
	}

	if(!$error) {
		$passwort_hash = password_hash($passwort, PASSWORD_DEFAULT);
		
		$sql = $pdo->prepare("INSERT INTO users (email, passwort, vorname, nachname) VALUES (:email, :passwort, :vorname, :nachname)");
		$result = $sql->execute(array('email' => $email, 'passwort' => $passwort_hash, 'vorname' => $vorname, 'nachname' => $nachname));
		
		if($result) {
			echo 'Registrierung erfolgreich. <a href="form_login.php">Zum Login</a>';
			$showFormular = false;
		}
		else {
			echo 'Beim Registrieren ist leider ein Fehler aufgetreten<br>';
		}
	}
}

if($showFormular) {
?>
	
	<form action="?register=1" method="post">
		<label for="email">Email*:</label><br>
		<input type="email" size="40" maxlength="250" name="email" required><br><br>
		
		<label for="vorname">Vorname:</label><br>
		<input type="text" size="40" maxlength="250" name="vorname"><br>
		
		<label for="nachname">Nachname:</label><br>
		<input type="text" size="40" maxlength="250" name="nachname"><br><br>
		
		<label for="passwort">Passwort*:</label><br>
		<input type="password" size="40" maxlength="250" name="passwort" required><br>
		
		<label for="passwort_rep">Passwort wiederholen*:</label><br>
		<input type="password" size="40" maxlength="250" name="passwort_rep" required><br><br>
		
		<input type="submit" value="Submit">
	</form>
<?php
}
?>

</body>
</html>