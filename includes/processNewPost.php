<?php
require 'dbconnect.php';
// handle posting messages
if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $category = $_POST['category'];
    $userno = $_POST['userno'];
    $postID = $_POST['postID'];
    $date_created =  $_POST['date_created'];

    // insert message data into the database
    $query = "INSERT INTO posts (title, content, category, userno, postID, date_created) 
    VALUES ('$title', '$content', '$category', '$userno', '$postID', '$date_created')";
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

// header('Location: ../discussions.php');
mysqli_close($conn);
?>