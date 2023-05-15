<?php
require_once 'dbconnect.php';

session_start();
$userno = $_SESSION['userno'];

// Gets the ID of the comment to be deleted
$commentID = isset($_POST['commentID']);

// Query the database to get the userno of the comment owner
$query = "SELECT userno FROM comments WHERE commentID = $commentID";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$comment_owner = $row['userno'];

// Check if the logged in user matches the comment owner
if ($userno == $comment_owner) {
// Delete the comment from the database
$query = "DELETE FROM comments WHERE commentID = $commentID";
mysqli_query($conn, $query);
// Redirect the user to the posts page
header("Location: ../microBlog.php");
} else {
// Display an error message
echo "You do not have permission to delete this comment.";
}
