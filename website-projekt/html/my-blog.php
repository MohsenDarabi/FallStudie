<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Blog</title>
    <!-- Existing Bootstrap CSS link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        /* Add custom styles for star ratings */
        .star-rating {
            display: inline-block;
            font-size: 1.25rem; /* Adjust size as needed */
        }
        .star-rating input[type="radio"] {
            display: none;
        }
        .star-rating label {
            display: inline-block;
            cursor: pointer;
            color: #ccc; /* Default color for empty star */
        }
        .star-rating input[type="radio"]:checked ~ label {
            color: #ffc107; /* Color for filled star */
        }
    </style>
</head>
<body>
    <!-- Navbar -->
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
            <!-- Example blog post with star rating -->
            <div class="blog-post">
                <h2>Post Title</h2>
                <p>Post content goes here...</p>
                <!-- Star rating component -->
                <div class="star-rating">
                    <input type="radio" id="rating-5" name="rating" value="5">
                    <label for="rating-5">&#9733;</label>
                    <input type="radio" id="rating-4" name="rating" value="4">
                    <label for="rating-4">&#9733;</label>
                    <input type="radio" id="rating-3" name="rating" value="3">
                    <label for="rating-3">&#9733;</label>
                    <input type="radio" id="rating-2" name="rating" value="2">
                    <label for="rating-2">&#9733;</label>
                    <input type="radio" id="rating-1" name="rating" value="1">
                    <label for="rating-1">&#9733;</label>
                </div>
            </div>
            <!-- Repeat this structure for other blog posts -->
            <?php
            // Include script to display blog posts
            include 'display_posts.php';
            ?>
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
