<!-- Display all user data stored in data base table -->

<!-- connect to database -->
<?php
// Replace "hostname", "username", "password" and "database_name" with your own values
$conn = mysqli_connect("hostname", "username", "password", "database_name");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>

<!-- query the database -->
<?php
// Query the database to retrieve all user data
$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);

// Check if there are any results
if (mysqli_num_rows($result) > 0) {
    // Loop through the results and display the data
    while ($row = mysqli_fetch_assoc($result)) {
        echo "ID: " . $row["id"] . " - Name: " . $row["name"] . " - Email: " . $row["email"] . "<br>";
    }
} else {
    echo "0 results";
}

// Close the connection
mysqli_close($conn);
?>