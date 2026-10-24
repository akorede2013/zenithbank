
<?php

session_start();

// Destroy the login session
session_unset();
session_destroy();

// Return to login page
header("Location: index.php");
exit();

?>

