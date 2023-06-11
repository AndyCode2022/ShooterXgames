<?php
ini_set("display_errors", 1);
error_reporting(E_ALL);
?>

<?php

session_start();
require '../includes/dbconnect.php';



// Get the ID of the post to be deleted
if (isset($_POST['postDelete'])) {
    $userno = $_SESSION['userno'];
    $postID = $_POST['postID'];

    // Deletes post if post with post ID is found
    $sql = "DELETE FROM posts WHERE postID = '$postID'";

    if (mysqli_query($conn, $sql)) {
        echo "Record was deleted successfully.";
    } else {
        echo "ERROR: Could not execute $sql. "
            . mysqli_error($conn);
    }
    mysqli_close($conn);
    header('location: ../admin/discussionsAdmin.php');
}

?>