<?php require 'includes/header.php' ?>

<div class="container">
<!-- User post form -->
    <form class="Form" id="postForm" action="includes/processNewPost.php" method="post">
        <div class="mb-3">
            <label for="title" required="true" class="form-label">Enter the title for your post</label>
            <input type="title" class="form-control" id="title" placeholder="Your title!" required="true">
        </div>

        <div class="mb-3">
            <label for="postText" class="form-label">What would you like to post?</label>
            <textarea class="form-control" id="postText" rows="3" required="true"></textarea>
        </div>
        <button type="submit" class="btn btn-primary" name="postSubmit" value="submit">Submit</button>
    </form>
</div>

<!-- Search bar -->
<div class="searchBar">
    <div class="container">
        <form class="d-flex" method="post" action="includes/processSearch.php">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
    </div>
</div>

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