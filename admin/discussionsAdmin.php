<?php require '../adminIncludes/headerAdmin.php' ?>

<div class="container">
    <div class="mb-3">
        <form action="../adminIncludes/processNewPostAdmin.php" method="post">
            <label for="exampleFormControlInput1" required="true" class="form-label">Enter the title for your post</label>
            <input type="title" class="form-control" id="exampleFormControlInput1" placeholder="Your title!" required="true">
    </div>

    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">What would you like to post?</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" required="true"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<div class="container">
    <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-2">
            What's Trending
        </div>
        <div class="col-md-2">
            Column 2
        </div>
        <div class="col-md-2">
            Column 3
        </div>
        <div class="col-md-2">
            Column 4
        </div>
        <div class="col-md-2">
            Column 5
        </div>
        <div class="col-md-2">
            Column 6
        </div>
    </div>
</div>

<h2>Admin Settings</h2>

<div class="container">
    <!-- Suspension & Promotion of a user form -->
    <h2>Admin Suspend & Promotion Panel</h2>
    <?php require '../adminIncludes/userList.php'; ?>
</div>

<img src="../images/csgoShot.png" alt="graphic">

<?php require '../adminIncludes/footerAdmin.php' ?>