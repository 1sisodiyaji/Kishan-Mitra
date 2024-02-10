<?php
session_start();
session_destroy();
header('Location: index.php');
exit(); // It's good practice to include exit() after header to prevent further execution
?>
