<!DOCTYPE html>
<html>
<head>
		<meta charset=UTF-8>
		<title>Amyitis - Login</title>
		<link rel=stylesheet type="text/css" href="../Stylesheets/stylesheet.css">
		<link rel=stylesheet type="text/css" href="../Stylesheets/game.css">
</head>
<body>
<form action=gameHandler.php method=post>
	<!--Fasst die Felder zur Erstellung des neuen Accounts zusammen-->
	<fieldset>
	<legend>Login</legend>
		<label for=acc_name>Accountname*: </label><br>
		<!--Eingabefeld für den gewünschten Benutzernamen-->
		<input type=text name=acc_name class=acc required><br>
		<label for=pw>Passwort*: </label><br>
		<!--Eingabefeld für das gewünschte Passwort-->
		<input type=text name=pw class=acc required><br>
		<button type=submit>Account erstellen</button>
	</fieldset>
</form>
</body>
</html>