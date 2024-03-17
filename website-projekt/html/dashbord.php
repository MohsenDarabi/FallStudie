<?php
session_start();
// Check if user is logged in
if (!isset($_SESSION['username'])) {
    // User is not logged in, redirect to login page
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Head content -->
</head>
<body>
    <!-- Navbar -->
    <nav>
        <ul>
            <li>Dashboard</li>
            <li>Welcome, <?php echo $_SESSION['username']; ?></li>
            <li><a href="logout.php">Logout</a></li> <!-- Logout link -->
        </ul>
    </nav>

    <!-- Dashboard content -->
    <h1>Welcome to the Dashboard!</h1>
    <!-- Other dashboard content -->

    <!-- Footer and scripts -->
</body>
</html>
