<?php
session_start();
require_once("dbconnect.php");
// Finds out username and password through database and then grabs it
// and then authenticates the password on whether it is correct or not
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT userno, firstname, lastname, password FROM users WHERE username = '$username'";

$result = $conn->query($sql);

if ($result->num_rows == 1) {

    $row = $result->fetch_assoc();

    if (password_verify($password, $row['password'])) {
        $message = "Hi " . $row['firstname'] . " " . $row['lastname'] . ". You have successfully logged in.";
        echo 'Click here to go to the home screen' . " " . "<a href=../user/indexUser.php>Home</a>";
        $_SESSION['loggedin'] = true;
        $_SESSION['userno'] = $row['userno'];
        $alertClass = "alert-success";
    } else {
        $message = "Password not recognised";
        $alertClass = "alert-danger";
    }
} else {
    $message = "Your username or password is incorrect";
    $alertClass = "alert-danger";
}

$conn->close();
?>

<!--Button   -->
<div class="container my-3">
    <div class="alert <?php echo $alertClass; ?> alert-dismissible fade show" role="alert">
        <?php echo $message; ?>
        <a href="../login.php">back</a>
    </div>
</div>