<!-- Checks if user is logged in or out for header -->
<?php
session_start();

if (isset($_SESSION['logged_in'])) {
    include 'loggedInUser/headerLoggedIn.php';
} else {
    include 'guest/headerLoggedOut.php';
}
?>