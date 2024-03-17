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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<?php include 'navbar.php'; ?>
<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
    <li class="nav-item">
        <span class="nav-link"><?php echo $welcomeMessage; ?></span>
    </li>
    <li class="nav-item">
        <a href="logout.php" class="nav-link">Logout</a>
    </li>
</ul>

<!-- Dashboard content -->
<div class="container py-5">
    <h1>Welcome to the Dashboard!</h1>
    <!-- Other dashboard content goes here -->
</div>

<footer class="footer mt-auto py-3 bg-light">
    <div class="container">
        <p class="text-muted">Contact: mohsen.darabi@outlook.de | Phone: </p>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> 
</body>
</html>
