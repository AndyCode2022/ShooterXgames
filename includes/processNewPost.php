<?php
require 'includes/dbconnect.php';
// handle posting messages
if (isset($_POST['submit'])) {
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $content = mysqli_real_escape_string($conn, $_POST['content']);
    $category = mysqli_real_escape_string($conn, $_POST['category']);
    $userno = mysqli_real_escape_string($conn, $_POST['userno']);
    $postId = mysqli_real_escape_string($conn, $_POST['postId']);
    $date_created = mysqli_real_escape_string($conn, $_POST['date_created']);

    // insert message data into the database
    $query = "INSERT INTO posts (title, content, category, userno, postId, date_created) 
    VALUES ('$title', '$content', '$category', '$userno', '$postId', '$date_created')";
    mysqli_query($conn, $query);

    echo 'Message posted';
}
// display messages
$query = "SELECT * FROM posts ORDER BY date_created DESC";
$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($result)) {
    echo '<div class="message">';
    echo '<h2>' . $row['title'] . '</h2>';
    echo '<p>' . $row['content'] . '</p>';
    echo '<p>Posted by ' . $row['username'] . ' on ' . $row['date_created'] . '</p>';
    echo '</div>';
}
?>