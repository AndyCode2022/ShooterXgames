<?php

session_start();

require 'dbconnect.php';
require 'checkLogin.php';

if (isset($_POST['submit'])) {

    $title = $_POST['title'];
    $postText = $_POST['postText'];

    // insert message data into the database
    $query = "INSERT INTO posts (title, postText) 
    VALUES ('$title', '$postText')";
    mysqli_query($conn, $query);

    echo 'Message posted';
}

header('Location: ../discussions.php');
mysqli_close($conn);

?>







// display messages
// $query = "SELECT * FROM posts ORDER BY date_created DESC";
// $result = mysqli_query($conn, $query);

// while ($row = mysqli_fetch_assoc($result)) {
// echo '<div class="message">';
    // echo '<h2>' . $row['title'] . '</h2>';
    // echo '<p>' . $row['postText'] . '</p>';
    // echo '<p>Posted by ' . $row['username'] . ' on ' . $row['date_created'] . '</p>';
    // echo '</div>';
// }

// header('Location: ../discussions.php');
// mysqli_close($conn);