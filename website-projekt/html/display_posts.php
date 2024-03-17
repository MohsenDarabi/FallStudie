<?php
// Include database connection file
include 'db_config.php';

// Define how many posts to display per page
$postsPerPage = 10;

// Calculate the offset based on the current page number
if (isset($_GET['page']) && is_numeric($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 1;
}
$offset = ($page - 1) * $postsPerPage;

// Prepare and execute SQL statement to retrieve blog posts with pagination
$stmt = $conn->prepare("SELECT blog_posts.*, users.username 
                        FROM blog_posts 
                        LEFT JOIN users ON blog_posts.author_id = users.user_id 
                        ORDER BY created_at DESC 
                        LIMIT ?, ?");
$stmt->bind_param("ii", $offset, $postsPerPage);
$stmt->execute();
$result = $stmt->get_result();

// Fetch posts and store them in an array
$posts = [];
while ($row = $result->fetch_assoc()) {
    $posts[] = $row;
}

// Close statement
$stmt->close();

// Display posts on the page
foreach ($posts as $post) {
    // Display post content
    echo "<h2>{$post['title']}</h2>";
    echo "<p>{$post['content']}</p>";
    echo "<p>Author: {$post['username']}</p>";
    echo "<hr>";
}

// Prepare and execute SQL statement to count total number of posts
$totalPostsStmt = $conn->prepare("SELECT COUNT(*) AS total_posts FROM blog_posts");
$totalPostsStmt->execute();
$totalPostsResult = $totalPostsStmt->get_result();
$totalPostsRow = $totalPostsResult->fetch_assoc();
$totalPosts = $totalPostsRow['total_posts'];

// Close statement and database connection
$totalPostsStmt->close();
$conn->close();

// Calculate total number of pages
$totalPages = ceil($totalPosts / $postsPerPage);

// Display pagination links
echo "<nav aria-label='Page navigation'>";
echo "<ul class='pagination'>";
for ($i = 1; $i <= $totalPages; $i++) {
    echo "<li class='page-item'><a class='page-link' href='my-blog.php?page={$i}'>{$i}</a></li>";
}
echo "</ul>";
echo "</nav>";
?>
