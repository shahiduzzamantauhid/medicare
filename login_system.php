<?php
session_start();

// Establish database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "medicare_md";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$username = $_POST['username'];
$password = $_POST['password'];

// Check if user exists
$sql = "SELECT * FROM users WHERE username='$username'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    // User found, verify password
    $row = $result->fetch_assoc();
    if (password_verify($password, $row['password'])) {
        // Password is correct, set session and redirect
        $_SESSION['username'] = $username;
        header("Location: medicines.php"); // Redirect to dashboard or any other page
        exit(); // Stop further execution
    } else {
        // Incorrect password
        echo "Incorrect password";
    }
} else {
    // User not found
    echo "User not found";
}

$conn->close();
?>
