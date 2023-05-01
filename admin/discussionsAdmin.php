<?php require '../adminIncludes/headerAdmin.php' ?>

<div class="container">
    <div class="mb-3">
        <form action="../adminIncludes/processNewPostAdmin.php" method="post">
            <label for="title" required="true" class="form-label">Enter the title for your post</label>
            <input type="title" class="form-control" id="title" placeholder="Your title!" required="true">
    </div>

    <div class="mb-3">
        <label for="postText" class="form-label">What would you like to post?</label>
        <textarea class="form-control" id="postText" rows="3" required="true"></textarea>
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
        <?php
        $posts = $_SESSION['title'];
        $posts = $_SESSION['postText'];
        ?>

        <?php foreach ($category as $category) ?>
        <div class="col-md-2">
            <h2><?php echo $post['title']; ?></h2>
            <p><?php echo $post['postText']; ?></p>
        </div>

        <?php foreach ($category as $category) ?>
        <div class="col-md-2">
            <h2><?php echo $post['title']; ?></h2>
            <p><?php echo $post['postText']; ?></p>
        </div>

        <?php foreach ($category as $category) ?>
        <div class="col-md-2">
            <h2><?php echo $post['title']; ?></h2>
            <p><?php echo $post['postText']; ?></p>
        </div>
    </div>

    <div class="row">
        <div class="col-md-2">
            <h2><?php echo $post['title']; ?></h2>
            <p><?php echo $post['postText']; ?></p>
        </div>
        <div class="col-md-2">
            <h2><?php echo $post['title']; ?></h2>
            <p><?php echo $post['postText']; ?></p>
        </div>
        <div class="col-md-2">
            <h2><?php echo $post['title']; ?></h2>
            <p><?php echo $post['postText']; ?></p>
        </div>
    </div>

</div>
?>

<div class="adminControl">
    <div class="container">
        <h2>Admin Settings</h2>
    </div>

    <div class="container">
        <!-- Suspension & Promotion of a user form -->
        <h2>Admin Suspend & Promotion Panel</h2>
        <?php require '../adminIncludes/userList.php'; ?>
    </div>
</div>

<img src="../images/csgoShot.png" alt="graphic">

<?php require '../adminIncludes/footerAdmin.php' ?>