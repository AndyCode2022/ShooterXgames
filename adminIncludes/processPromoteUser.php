<?php
session_start();

require '../includes/dbconnect.php';

// Retrieves userno for account promotion
$userno = $_POST['userno'];

// Updates user account to admin role
$isAdmin = true;

// Update the user's role in the database
$sql = "UPDATE users SET isAdmin = '$isAdmin' WHERE userno = $userno";
mysqli_query($conn, $sql);

header("Location: ../microBlogAdmin.php");

// Close the database connection
mysqli_close($conn);

?>