<?php
$user;
$password;
if($_POST["pw"] != $_POST["pw_c"]){
	echo "<h2>Fehler! Passwörter stimmen nicht überein!</h2>";
}
else{
	$username = $_POST["acc_name"];
	$password = $_POST["pw"];
	$user = $username . "|" . $password;
	$logfile = fopen('logfile.txt','a') or die ("unable to open file");
	fwrite($userfile,$user . PHP_EOL);
	fclose($userfile);
	header('Location: ../Views/view_login.php');
}
?>
 <!DOCTYPE html>

<html lang=de>
<head>
	<meta charset=utf-8>
	<title>Error</title>
</head>
<body>
	Bei der Registrierung ist ein Fehler aufgetreten. Bitte versuchen Sie es später noch einmal.
</body>
</html>