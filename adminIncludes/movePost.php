<?php
session_start();

include_once('../includes/dbconnect.php');
// Checks user info
$userno = $_POST['userno'];

$sql = "SELECT * FROM users WHERE userno = '$userno'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
} else {
    echo "Unable to retrieve user info.";
}

// This is used to move posts to the correct categories

$postID = $_POST['postID'];
$catergory = $_POST['catergory'];
$userno = $_POST['userno'];
$title = $_POST['title'];
$postText = $_POST['postText'];
$date_created = $_POST['date_created'];
$postFlag = $_POST['postFlag'];
$postFlagger = $_POST['postFlagger'];


$sql = "UPDATE posts WHERE postID = '$postID';
SET  = 'title', 
SET postText = 'postText', 
WHERE userno = $userno";

if ($conn->query($sql) == true) {
    echo "<p>Post has been moved.</p>";
} else {
    echo "Sorry something went wrong.";
}

$conn->close();


?>