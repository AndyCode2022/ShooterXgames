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
                <input type="title" class="form-control" id="horror" placeholder="Your title!" required="true">
                <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                <textarea class="form-control" id="horrorContent" rows="3" required="true"></textarea>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

        <!-- Action -->
        <div class="col-md-2">


        </div>

        <!-- Sci-Fi -->
        <!-- <div class="col-md-2">
        <form action="includes/processNewPost.php" method="post">
                <label for="exampleFormControlInput1" required="true" class="form-label">Sci-Fi</label>
                <input type="title" class="form-control" id="horro" placeholder="Your title!" required="true">
                <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                <textarea class="form-control" id="sci-fi_content" rows="3" required="true"></textarea>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div> -->

        <!-- Military -->
        <!-- <div class="col-md-2">
            <form action="includes/processNewPost.php" method="post">
                <label for="exampleFormControlInput1" required="true" class="form-label">Military</label>
                <input type="title" class="form-control" id="military" placeholder="Your title!" required="true">
                <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                <textarea class="form-control" id="MilitaryContent" rows="3" required="true"></textarea>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div> -->

        <!-- Second row categories -->
        <!-- <div class="row"> -->

        <!-- Survival -->
        <!-- <div class="col-md-2">
            <form action="includes/processNewPost.php" method="post">
                <label for="exampleFormControlInput1" required="true" class="form-label">Survival</label>
                <input type="title" class="form-control" id="survival" placeholder="Your title!" required="true">
                <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                <textarea class="form-control" id="survivalContent" rows="3" required="true"></textarea>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div> -->

        <!-- Competitive multiplayer -->
        <!-- <div class="col-md-2">
            <form action="includes/processNewPost.php" method="post">
                <label for="exampleFormControlInput1" required="true" class="form-label">Competitive Multiplayer</label>
                <input type="title" class="form-control" id="competitiveMultiplayer" placeholder="Your title!" required="true">
                <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                <textarea class="form-control" id="competitiveMultiplayerContent" rows="3" required="true"></textarea>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div> -->

        <!-- Tactical -->
        <!-- <div class="col-md-2">
            <form action="includes/processNewPost.php" method="post">
                <label for="exampleFormControlInput1" required="true" class="form-label">Tactical</label>
                <input type="title" class="form-control" id="tactical" placeholder="Your title!" required="true">
                <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                <textarea class="form-control" id="tacticalContent" rows="3" required="true"></textarea>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div> -->

        <!-- </div> -->

        <?php require 'includes/displayPosts.php'; ?>

        <aside>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h2>Latest posts</h2>
                        <p>Here you can find the latest posts from the community!</p>

                    </div>
                </div>
            </div>
        </aside>

        <div class="container-fluid">
            <img src="images/cycleFrontier.jpg" class="img-fluid vw 100 vh-100" alt="The cycleFrontier gameplay image">
        </div>

        <?php require 'includes/footer.php' ?>