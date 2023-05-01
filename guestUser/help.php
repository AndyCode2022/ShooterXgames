<?php require 'header.php' ?>

<p>This page is for users that are struggling with problems on the
    website or within a first person shooter that is on pc
</p>

<div class="container">
    
    <div class="mb-3">
        <form action="includes/processNewHelpPost.php" method="post">
            <label for="exampleFormControlInput1" required="true" class="form-label">Please give a brief title for your question</label>
            <input type="title" class="form-control" id="exampleFormControlInput1" placeholder="Your title!" required="true">
    </div>

    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">What is your issue?</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" required="true"></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>

    </form>

    <!-- Search for the help posts you require -->
    <div class="container">
        <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
    </div>

    <!-- blogs are displayed on the website by the system -->
    <h2 class="postTitle">Posts</h2>

    <?php require 'includes/displayPosts.php'; ?>

    <?php require 'footer.php' ?>