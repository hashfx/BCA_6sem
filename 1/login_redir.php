<?php
// Get the user's input from the login form
$username = $_POST['username'];
$password = $_POST['password'];

// Check if the username and password are correct
// This would involve querying a database to see if there's a user with that username and password

// If the username and password are correct, log the user in and redirect them to a dashboard page
session_start();
$_SESSION['username'] = $username;
header("Location: about.php");
exit();

// If the username and password are incorrect, show an error message
echo "Incorrect username or password.";
?>
