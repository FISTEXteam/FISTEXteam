<?php
$servername = "localhost";
$username = "root";
$password = ""; // Your MySQL root password
$dbname = "my_database"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $email = $conn->real_escape_string($_POST['email']);
    $password = $conn->real_escape_string($_POST['password']);
    
    // Simple validation
    if (!empty($email) && !empty($password)) {
        // Check database for matching email and password
        $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<h1>Login Successful</h1>";
            echo "<p>Welcome, " . $email . "!</p>";
        } else {
            echo "<h1>Login Failed</h1>";
            echo "<p>Invalid email or password.</p>";
        }
    } else {
        echo "<h1>Error</h1>";
        echo "<p>Please fill in all fields.</p>";
    }
} else {
    echo "<h1>Error</h1>";
    echo "<p>Invalid request method.</p>";
}

$conn->close();
?