<!-- Access cookie data and display it -->
<!DOCTYPE html>
<html>

<head>
    <title>Accessing Cookies in PHP</title>
</head>

<body>
    <?php
    // check if the "name" cookie is set
    if (isset($_COOKIE['name'])) {
        // retrieve the value of the "name" cookie
        $name = $_COOKIE['name'];
        // display the value of the "name" cookie
        echo "Hello, $name!";
    } else {
        // if the "name" cookie is not set, display a message
        echo "Cookie is not set.";
    }
    ?>
</body>

</html>