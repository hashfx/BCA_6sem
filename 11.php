<!-- create cookie to store a name -->

<?php
$name = "John"; // the name you want to store in the cookie
$cookie_name = "user_name"; // the name of the cookie

setcookie($cookie_name, $name, time() + 3600); // set the cookie with a 1 hour expiration time
?>