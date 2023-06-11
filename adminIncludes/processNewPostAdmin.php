<?php
ini_set("display_errors", 1);
error_reporting(E_ALL);
?>


<?php
require '../includes/dbconnect.php';
// handle posting messages

if (isset($_POST['submitPost'])) {

    $postID = isset($_POST['postID']);
    $userno = isset($_POST['userno']);
    $title = $_POST['title'];
    $postText = $_POST['postText'];
    $category = $_POST['category'];


    // insert message data into the database
    $query = "INSERT INTO posts (postID, userno, title, postText, category) 
    VALUES ('$postID', '$userno', '$title', '$postText', '$category')";

    // Error handling for posting comments
    if (mysqli_query($conn, $query)) {
        echo 'Message posted';
    } else {
        echo 'Error: ' . mysqli_error($conn);
    }
}

mysqli_close($conn);

header('Location: ../admin/discussionsAdmin.php');

?>