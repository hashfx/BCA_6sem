<!-- create session cookie -->

<?php
// Set the session cookie parameters
session_set_cookie_params(3600, '/', 'localhost', false, true);

// Start the session
session_start();

// Set a session variable
$_SESSION['username'] = 'JohnDoe';

// Display the session ID and the value of the session variable
echo 'Session ID: ' . session_id() . '<br>';
echo 'Username: ' . $_SESSION['username'];
?>