<?php require 'includes/header.php' ?>

<style>
    /* Background image for the website */
    body {
        background-image: url('images/destiny_2_2.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        /* opacity: 50; */
    }
</style>

<div class="container">
    <div class="rowImage">
        <div class="col">
            <img src="images/destiny_2_1.jpg" id="image1" class="rounded float-start img-fluid" alt="destiny 2 image">
        </div>

        <div class="col">
            <img src="images/destiny_2_2.jpg" id="image2" class="rounded float-end img-fluid" alt="destiny 2 image">
        </div>
    </div>
</div>

<div>
    <div class="card-body">
        <p class="welcomeInfo">Hello and welcome to ShooterXgames! This site has been designed for
            first person shooter players to come together and discuss their
            favourite games, share tips and tricks and help each other out.
        </p>
    </div>
</div>

<script src="JavaScript/app.js"></script>

<?php require 'includes/footer.php' ?>