<?php
// Update the comment in the database
require '../includes/dbconnect.php';

if (isset($_POST['editComment'])) {

    $commentText = ($_POST['commentText']);
    $commentID = ($_POST['commentID']);
    $commentOwner = $commentID;
    
    if ($commentID = $commentOwner) {
        $sql = "UPDATE comments SET commentText='$commentText' WHERE commentID='$commentID'";
        $result = $conn->query($sql);
        header("Location: ../admin/discussionsAdmin.php");
        exit;
    }
}


?>

<!-- references -->
<!-- https://www.youtube.com/watch?v=kWOuUkLtQZw&ab_channel=DaniKrossing -->