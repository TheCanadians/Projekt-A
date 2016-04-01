<?php

$servername = '127.0.0.1';
$username = 'root';
$password = '';

$conn = new mysqli($servername, $username, $password, $dbName);
$sql = "CREATE DATABASE taskList";

if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}


$conn->close();
header('Location: CreateDB.php');

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
    </head>
    <body>
        
    </body>
</html>
