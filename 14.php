<!-- create persistent cookie -->
<!DOCTYPE html>
<html>

<head>
    <title>Persistent Cookie</title>
</head>

<body>
    <form method="post">
        <label for="username">Enter your username:</label>
        <input type="text" id="username" name="username">
        <button type="submit" name="create_cookie">Create Cookie</button>
    </form>

    <?php
    if (isset($_POST['create_cookie'])) {
        $username = $_POST['username'];

        // Set cookie expiration to 1 hour from now
        $expiration = time() + (3600);

        // Set the cookie
        setcookie('username', $username, $expiration, '/');

        echo "<p>Cookie created successfully.</p>";
    }
    ?>
</body>

</html>