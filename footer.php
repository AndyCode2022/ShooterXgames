<!-- Checks if user is logged in or out for footer -->
<?php

if (isset($_SESSION['logged_in'])) {
    include 'loggedInUser/footerLoggedIn.php';
} else {
    include 'guestUser/footerLoggedOut.php';
}

?>