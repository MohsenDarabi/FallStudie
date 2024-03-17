<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>

    <!-- Login Form -->
    <form action="login.php" method="post">
        <div>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <button type="submit">Login</button>
    </form>

    <!-- PHP Authentication Code -->
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
</body>
</html>