<?php

$servername = '127.0.0.1';
$username = 'root';
$password = '';
$dbName = 'taskList';
// Create connection

$conn = new mysqli($servername, $username, $password, $dbName);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

if(isset($_POST['taskCreate'])){
    
    $sql = "CREATE TABLE empty(
        id INTEGER(1)

    )";

    if ($conn->query($sql) === TRUE) {
        echo "Table Empty created successfully";
    } else {
        echo "Error creating table: " . $conn->error;
    }


}
elseif(isset($_POST['taskDestroyer'])){
    $sql = "DROP TABLE empty";
    if ($conn->query($sql) === TRUE) {
        echo "Table Empty destroyed successfully";
    } else {
        echo "Error destroying table: " . $conn->error;
    }

}




$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
    </head>
    <body>
       <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
         <input type="submit" name="taskCreate" value="Create Task">
        <input type="submit" name="taskDestroyer" value="Destroy Task">
       </form>
    </body>
</html>
