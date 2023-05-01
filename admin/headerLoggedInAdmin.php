<!-- Cookies -->

<?php
$cookie_name = "user";
$cookie_value = "shooterxgames";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>

    <?php
    if (!isset($_COOKIE[$cookie_name])) {
        echo "Cookie named '" . $cookie_name . "' is not set!";
    } else {
        // echo "Cookie '" . $cookie_name . "' is set!<br>";
        // echo "Value is: " . $_COOKIE[$cookie_name];
    }
    ?>

    <!-- PHP saving data for users on website -->
    <!-- HTML DOCUMENT WITH DATA -->

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Games Forum</title>
        <link rel="stylesheet" href="styles/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    </head>

    <body>
        <!-- Navbar for navigating through the website -->
        <!-- Make a bootstrap 5 navbar to allow dark mode to be compatible -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">ShooterXgames</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" onclick="toggleIcon()">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="indexAdmin.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="rulesAdmin.php">Rules</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="discussionsAdmin.php">Discussions</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="helpAdmin.php">Help</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contactAdmin.php">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="updateUserAdmin.php">Update User</a>
                        </li>
                    </ul>
                </div>
                <div class="button1">
                    <button onclick="functionDark()">Dark Mode</button>
                </div>
                <div class="button1">
                    <form method="post" action="../adminIncludes/logoutAdmin.php">
                        <button type="submit" name="logout">Logout</button>
                    </form>
                </div>
            </div>
        </nav>

        <script src="JavaScript/app.js"></script>