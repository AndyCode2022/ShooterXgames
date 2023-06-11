// This file allows the user to search for the post that they're interested in.

<?php

include '../includes/dbconnect.php';
// Process the search form
if ($_POST['submitSearch']) {
    $search = isset($conn, $_POST['search']);
    $sql = "SELECT * FROM post 
WHERE title LIKE '%$search%' OR postText LIKE '%$search%'";
    $result = mysqli_query($conn, $sql);
}

header('location: ../admin/discussionsAdmin.php');

?>

<!-- references -->
<!-- https://www.youtube.com/watch?v=lwgG_uIJYQM&ab_channel=DaniKrossing -->