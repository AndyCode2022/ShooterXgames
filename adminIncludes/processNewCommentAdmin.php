<?php
require '../includes/dbconnect.php';

// handle posting messages
if (isset($_POST['submitComment'])) {

    $postID = $_POST['postID'];
    $userno = $_POST['userno'];
    $commentText = $_POST['commentText'];

    // insert message data into the database
    $query = "INSERT INTO comments (postID, userno, commentText)
    VALUES ('$postID', '$userno', '$commentText')";

// Error handling for posting comments
    if (mysqli_query($conn, $query)) {
        echo 'Message posted';
    } else {
        echo 'Error: ' . mysqli_error($conn);
    }
    echo 'Message posted';
}
mysqli_close($conn);
header('Location: ../admin/discussionsAdmin.php');
