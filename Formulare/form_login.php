<?php

$logfile = fopen('logfile.txt', 'r');
$username = $_POST['acc_name'];
$password = $_POST['pw'];
$logfile_players_array = file('logfile.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
$length = count($logfile_players_array);
$login = false;

foreach ($logfile_players_array as $user) {
	$user_data = explode('|', $user);
	if ($user_data[0] == $username && $user_data[1] == $password) {
		$login = true;
		break;
	}
}

if ($login == true) {
	header("Location: ../Views/view_startbildschirm.php");
}
else {
	echo "Fehler!";
}

?>

<!DOCTYPE html>
<html lang=de>
	<head>
		<meta charset=utf-8>
		<title>Fehler</title>
	</head>
	<body>
	
	</body>
</html>