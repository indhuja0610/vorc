<?php
session_start();

// Unset all session variables
session_unset();

// Destroy the session
session_destroy();

// Prevent back button after logout
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Pragma: no-cache");

// Redirect to login page
header("Location: index.php");
exit();
