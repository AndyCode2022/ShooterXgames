<?php
// Update the comment in the database
require '../includes/dbconnect.php';

// Redirect the user back to the comments page
// function editComments($conn) {
   

    if (isset($_POST['editPost'])) {

    $commentText = ($_POST['commentText']);
    $commentID = ($_POST['commentID']);

        $sql = "UPDATE comments SET commentText='$commentText' WHERE commentID='$commentID'";
        $result = $conn->query($sql);
            header("Location: ../admin/discussionsAdmin.php");
            exit;
    }
// }

?>

<!-- references -->
<!-- https://www.youtube.com/watch?v=kWOuUkLtQZw&ab_channel=DaniKrossing -->