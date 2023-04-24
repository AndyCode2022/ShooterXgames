<?php require 'includes/header.php' ?>

<!-- Search bar -->
<div class="searchBar">

    <div class="container">

        <form class="d-flex" method="post" action="includes/processSearch.php">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>

    </div>

</div>

<!-- First row categories -->
<div class="container">

    <div class="row">
        <!-- Horror -->
        <div class="col-md-2">
            <form action="includes/processNewPost.php" method="post">
                <label for="exampleFormControlInput1" required="true" class="form-label">Horror</label>
                <input type="title" class="form-control" id="exampleFormControlInput1" placeholder="Your title!" required="true">
                <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" required="true"></textarea>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

        <!-- Sci-Fi -->
        <div class="col-md-2">
            <form action="includes/processNewPost.php" method="post">
                <label for="exampleFormControlInput1" required="true" class="form-label">Sci-Fi</label>
                <input type="title" class="form-control" id="exampleFormControlInput1" placeholder="Your title!" required="true">
                <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" required="true"></textarea>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

        <!-- Military -->
        <div class="col-md-2">
            <form action="includes/processNewPost.php" method="post">
                <label for="exampleFormControlInput1" required="true" class="form-label">Military</label>
                <input type="title" class="form-control" id="exampleFormControlInput1" placeholder="Your title!" required="true">
                <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" required="true"></textarea>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

    <!-- Second row categories -->
    <div class="row">

        <!-- Survival -->
        <div class="col-md-2">
            <form action="includes/processNewPost.php" method="post">
                <label for="exampleFormControlInput1" required="true" class="form-label">Survival</label>
                <input type="title" class="form-control" id="exampleFormControlInput1" placeholder="Your title!" required="true">
                <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" required="true"></textarea>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

        <!-- Competitive multiplayer -->
        <div class="col-md-2">
            <form action="includes/processNewPost.php" method="post">
                <label for="exampleFormControlInput1" required="true" class="form-label">Competitive Multiplayer</label>
                <input type="title" class="form-control" id="exampleFormControlInput1" placeholder="Your title!" required="true">
                <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" required="true"></textarea>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

        <!-- Tactical -->
        <div class="col-md-2">
            <form action="includes/processNewPost.php" method="post">
                <label for="exampleFormControlInput1" required="true" class="form-label">Tactical</label>
                <input type="title" class="form-control" id="exampleFormControlInput1" placeholder="Your title!" required="true">
                <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" required="true"></textarea>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

    </div>

    <?php require 'includes/displayPosts.php'; ?>

    <div class="discussionImage">
        <img src="images/cycleFrontier.jpg" alt="The cycleFrontier gameplay image">
    </div>

    <?php require 'includes/footer.php' ?>