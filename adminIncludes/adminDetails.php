<?php

require '../includes/dbconnect.php';

// Finds out if user is an admin

$userno = $_SESSION['userno'];

$sql = "SELECT * FROM users WHERE userno = $userno";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
} else {
    echo "Unable to retrieve userno info.";
}

$conn->close();
