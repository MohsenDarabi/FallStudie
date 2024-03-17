<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Blog</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<?php include 'navbar.php'; ?>
<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
    <li class="nav-item">
        <span class="nav-link"><?php echo $welcomeMessage; ?></span>
    </li>
    <?php echo $logoutOption; ?>
</ul>

<!-- My Blog content -->
<div class="container py-5">
    <section id="blog">
        <h1>Welcome to My Blog!</h1>
        <p>Welcome to my blog! This is where I share my thoughts, ideas, and experiences.</p>
    </section>
</div>

<footer class="footer mt-auto py-3 bg-light">
    <div class="container">
        <p class="text-muted">Contact: mohsen.darabi@outlook.de | Phone: </p>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> 
</body>
</html>
