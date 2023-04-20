<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Games Forum</title>
    <link rel="stylesheet" href="../styles/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">ShooterXgames</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" onclick="toggleIcon()">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="indexUser.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="rulesUser.php">Rules</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="discussionsUser.php">Discussions</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="helpUser.php">Help</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contactUser.php">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="registerUser.php">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="updateUser.User.php">Update User</a>
                    </li>
                </ul>
            </div>
            <div class="button1">
                <button onclick="functionDark()">Dark Mode</button>
                <form method="post" action="../includes/logout.php">
                    <button type="submit" name="logout">Logout</button>
                </form>
            </div>
        </div>
    </nav>

    <script src="JavaScript/app.js"></script>