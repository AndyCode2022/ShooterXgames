<?php
ini_set("display_errors", 1);
error_reporting(E_ALL);
?>

<?php
// Update the comment in the database
require_once '../includes/dbconnect.php';

if (isset($_POST['postEdit'])) {
    $postID = $_POST['postID'];
    $postText = $_POST['postText'];
    $postOwner = $postID;

    if ($postID = $postOwner) {
    $sql = "UPDATE posts SET postText='$postText' WHERE postID='$postID'";
    }

    if (mysqli_query($conn, $sql)) {
        echo "Record was updated successfully.";
    } else {
        echo "ERROR: Could not execute $sql. "
            . mysqli_error($conn);
    }
    mysqli_close($conn);
    // header('location: ../admin/discussionsAdmin.php');
}
?>

<!-- references -->
<!-- https://www.youtube.com/watch?v=kWOuUkLtQZw&ab_channel=DaniKrossing -->
