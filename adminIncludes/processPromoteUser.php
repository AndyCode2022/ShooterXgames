<?php
session_start();

require '../includes/dbconnect.php';

// Retrieves userno for account promotion
$userno = $_SESSION['userno'];

// Updates user account to admin role
$isAdmin = true;

// Update the user's role in the database
$sql = "UPDATE users SET isAdmin = '$isAdmin' WHERE userno = $userno";
mysqli_query($conn, $sql);

header("Location: ../admin/discussionsAdmin.php");

// Close the database connection
mysqli_close($conn);

?>