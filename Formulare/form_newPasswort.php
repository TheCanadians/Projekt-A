<?php
session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Passwort ändern</title>
</head>
<body>

<?php

$pdo = new PDO('mysql:host=localhost;dbname=amyitis', 'root', '');

if(!isset($_SESSION['userid'])) {
	die('Sie sind nicht angemeldet. <a href="../Formulare/form_login.php">Zum Login</a>');
}

$userid = $_SESSION['userid'];
$showFormular = true;

if(isset($_GET['newPasswort'])) {
	$error = false;
	$oldPW = $_POST['oldPW'];
	$newPW = $_POST['newPW'];
	$newPWRep = $_POST['newPWRep'];
	
	if(strlen($oldPW) == 0 || strlen($newPW) == 0 || strlen($newPWRep) == 0) {
		echo 'Bitte ein gültiges Passwort angeben<br>';
		$error = true;
	}
	if($newPW != $newPWRep) {
		echo 'Die Passwörter müssen übereinstimmen<br>';
		$error = true;
	}

	if(!$error) {
		$passwort_hash = password_hash($newPW, PASSWORD_DEFAULT);
		$sql = $pdo->prepare("UPDATE users SET passwort='".$passwort_hash."' WHERE id='".$userid."'");
		$result = $sql->execute();
		
		if($result) {
			echo 'Passwort erfolgreich geändert.';
			session_destroy();
			echo "<a href='form_login.php'>Zum Login</a>";
			$showFormular = false;
		}
		else {
			echo 'Beim Ändern des Passwortes ist leider ein Fehler aufgetreten<br>';
		}
	}
}

if($showFormular) {
?>
	<form action="?newPasswort=1" method="post">
		<label for="oldPW">Altes Passwort*: </label><br>
		<input type="password" name="oldPW" required><br>
		<label for="newPW">Neues Passwort*: </label><br>
		<input type="password" name="newPW" required><br>
		<label for="newPWRep">Neues Passwort bestätigen*: </label><br>
		<input type="password" name="newPWRep" required><br>
		
		<input type="submit" value="Bestätigen">
	</form>

<?php } ?>

</body>
</html>