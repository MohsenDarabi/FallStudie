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
    <!-- Keep the existing Bootstrap CSS link -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<?php include 'navbar.php'; ?>
<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
    <li class="nav-item">
        <span class="nav-link">Welcome, <?php echo $_SESSION['username']; ?></span>
    </li>
    <li class="nav-item">
        <a href="logout.php" class="nav-link">Logout</a>
    </li>
</ul>

<!-- Dashboard content -->
<div class="container py-5">
    <h1>Welcome to the Dashboard!</h1>
    <?php
    // Display success message if redirected from create_post.php with success parameter
    if (isset($_GET['success']) && $_GET['success'] == 1) {
        echo '<div class="alert alert-success" role="alert">Post created successfully!</div>';
    }
    ?>
    <form action="create_post.php" method="post">
        <div class="mb-3">
            <label for="title" class="form-label">Title:</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Content:</label>
            <textarea class="form-control" id="content" name="content" rows="4" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Create Post</button>
    </form>
</div>

<footer class="footer mt-auto py-3 bg-light">
    <div class="container">
        <p class="text-muted">Contact: mohsen.darabi@outlook.de | Phone: </p>
    </div>
</footer>

<!-- Keep the existing Bootstrap JS script link -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
