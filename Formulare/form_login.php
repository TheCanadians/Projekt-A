<?php
session_start();
$pdo = new PDO('mysql:host=localhost;dbname=amyitis', 'root', '');

if(isset($_GET['login'])) {
	$email = $_POST['email'];
	$passwort = $_POST['passwort'];
	
	$sql = $pdo->prepare("SELECT * FROM users WHERE email = :email");
	$result = $sql->execute(array('email' => $email));
	$user = $sql->fetch();
	
	if($user !== false && password_verify($passwort, $user['passwort'])) {
		$_SESSION['userid'] = $user['id'];
		die('Login erfolgreich. Weiter zu <a href="../gameboard.php">Zum Spiel</a>');
	}
	else {
		$errorMessage = "Email oder Passwort ungültig<br>";
	}
}

?>

<!DOCTYPE html>
<html lang=de>
<head>
	<title>Login</title>
</head>
<body>
	
<?php 
if(isset($errorMessage)) {
	echo $errorMessage;
}
?>

<form action="?login=1" method="post">
	<label for="email">Email:</label><br>
	<input type="email" size="40" maxlength="250" name="email"><br><br>
	
	<label for="passwort">Passwort:</label><br>
	<input type="password" size="40" maxlength="250" name="passwort"><br>
	
	<input type="submit" value="Submit">
</form>	
</body>
</html>