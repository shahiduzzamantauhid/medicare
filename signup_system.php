<?php
// Establish database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "medicare_md";

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm_password'];

    // Validate if passwords match
    if ($password === $confirmPassword) {
        // Passwords match, continue with registration process
        // Establish connection to MySQL server
        $mysqli = new mysqli("localhost", "root", "", "medicare_md");

        // Check connection
        if ($mysqli->connect_error) {
            die("Connection failed: " . $mysqli->connect_error);
        }

        // Escape special characters to prevent SQL injection
        $fullname = $mysqli->real_escape_string($fullname);
        $username = $mysqli->real_escape_string($username);
        $password = $mysqli->real_escape_string($password);

        // Hash the password for security (you should use a more secure hashing method in production)
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Insert user data into the database
        $sql = "INSERT INTO users (fullname, username, password) VALUES ('$fullname', '$username', '$hashedPassword')";
        if ($mysqli->query($sql) === TRUE) {
            echo "New record created successfully";
            header("Location: login.php");
        } else {
            echo "Error: " . $sql . "<br>" . $mysqli->error;
        }

        // Close connection
        $mysqli->close();
    } else {
        // Passwords do not match, display an error message or handle the error accordingly
        echo "Passwords do not match!";
    }
}

?>
