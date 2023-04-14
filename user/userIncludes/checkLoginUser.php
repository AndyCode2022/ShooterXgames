<?php
// Checks whether user is logged in or not
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] == false) {
    header($_SERVER["SERVER_PROTOCOL"]);
    exit;
}
?>