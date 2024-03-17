<?php
session_start();
// Check if user is logged in
if (!isset($_SESSION['username'])) {
    // User is not logged in, redirect to login page
    header("Location: login.php");
    exit();
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $title = $_POST['title'];
    $content = $_POST['content'];
    // Include database connection file
    include 'db_config.php';

    // Prepare and execute SQL statement to insert new blog post
    $stmt = $conn->prepare("INSERT INTO blog_posts (title, content, author_id) VALUES (?, ?, ?)");
    $stmt->bind_param("ssi", $title, $content, $_SESSION['user_id']);
    $stmt->execute();

    // Close statement and database connection
    $stmt->close();
    $conn->close();

    // Redirect to dashboard with success message
    header("Location: dashboard.php?success=1");
    exit();
}
?>
