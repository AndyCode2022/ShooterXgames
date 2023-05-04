<?php
session_start();
// Connect to the database
require_once '../includes/dbconnect.php';

// Define the userno and new isSuspended status

$isAdmin = (isset($_SESSION['isAdmin']));
$stmt = $conn->prepare("SELECT * FROM users where userno = ?");
$stmt->bind_param("i", $_SESSION['userno']);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    if ($row['isAdmin'] == 1) {
        header('location: ../admin/discussionsAdmin.php');
    } else {
        header('location: ../discussions.php');
    }
}

$isSuspended = true;
$userno = $_SESSION['userno'];

// Update the user's record with the new isSuspended status
$isAdmin = (isset($_SESSION['isAdmin']));
$stmt = $conn->prepare("UPDATE users SET isSuspended = '$isSuspended' WHERE userno = ?");
$stmt->bind_param("i", $_SESSION['userno']); 
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    if ($row['isAdmin'] == 1) {
    echo "User is suspended successfully";
} else {
    echo "Error suspending user: " . mysqli_error($conn);
    header("Location: ../includes/isAdmin.php");
 }
}

header("Location: ../admin/discussionsAdmin.php");

// Close the database connection
mysqli_close($conn);
