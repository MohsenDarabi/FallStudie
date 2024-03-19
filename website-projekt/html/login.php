<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>
    <?php include 'navbar.php';?>
    <h2>Login</h2>

    <!-- Display Error Message if Present -->
    <?php if(isset($_GET['error']) && $_GET['error'] == 1): ?>
        <div class="alert alert-danger" role="alert">
            Invalid username or password!
        </div>
    <?php endif; ?>

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
            // Redirect to the dashboard page after successful login
            header("Location: dashboard.php");
        } else {
            // Invalid credentials, redirect back to login page with error parameter
            header("Location: login.php?error=1");
            exit(); // Terminate script execution after redirect
        }
    }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> 
</body>
</html>
