<?php
session_start();
// Connect to the database
require_once '../includes/dbconnect.php';
// Define the userno and new isSuspended status
$userno = $_SESSION['userno'];
$isSuspended = false;

// Update the user's record with the new isSuspended status
$sql = "UPDATE users SET isSuspended = '$isSuspended' WHERE userno = '$userno'";
$result = mysqli_query($conn, $sql);

if ($result) {
    echo "User is unSuspended successfully";
} else {
    echo "Error suspending user: " . mysqli_error($conn);
}

header("Location: ../admin/discussionsAdmin.php");

// Close the database connection
mysqli_close($conn);
