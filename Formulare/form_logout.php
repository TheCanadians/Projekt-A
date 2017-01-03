<?php
session_start();
session_destroy();
 
echo "Logout erfolgreich<br>";
echo "<a href='form_login.php'>Zum Login</a>";
?>
