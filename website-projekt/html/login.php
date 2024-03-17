<?php
session_start();

// Include database configuration
include 'db_config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve username and password from form submission
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query to check if the username and password match
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // User authenticated, set session variables
        $_SESSION['username'] = $username;
        //header("Location: my-blog.php"); // Redirect to the blog page after successful login
        header("Location: dashbord.php"); // Redirect to the blog page after successful login
    } else {
        // Invalid credentials, redirect back to login page
       // header("Location: my-blog.html?error=1"); // Add error parameter to indicate failed login attempt
       echo "Invalid username or password";
    }
}
?>
