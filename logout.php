<?php
session_destroy();
unset($_SESSION['id']);
unset($_SESSION['username']);
unset($_SESSION['email']);
unset($_SESSION['verify']);
header("location: login.php");


?>
<?php
// Include configuration file
require_once 'config.php';

// Remove access token from session
unset($_SESSION['facebook_access_token']);

// Remove user data from session
unset($_SESSION['userData']);

// Redirect to the homepage
header("Location:index.php");
?>