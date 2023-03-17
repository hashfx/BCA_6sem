<!-- Access cookie data and display it -->
<!DOCTYPE html>
<html>

<head>
    <title>Accessing Cookies in PHP</title>
</head>

<body>
    <?php
    $cookie_name = "FAANG";
    $cookie_value = "Google";
    setcookie($cookie_name, $cookie_value, time() + (3600), "/");

    // check if the "name" cookie is set
    if (isset($_COOKIE['cookie_name'])) {
        // retrieve the value of the "name" cookie
        $name = $_COOKIE['cookie_name'];
        // display the value of the "name" cookie
        echo "Hello ".$name;
    } else {
        // if the "name" cookie is not set, display a message
        echo "Cookie is not set.";
    }
    ?>
</body>

</html>