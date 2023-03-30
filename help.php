<?php require 'includes/header.php' ?>

<p>This page is for users that are struggling with problems on the
    website or within a first person shooter that is on pc
</p>

<!-- Search for the help posts you require -->
<div class="container">
    <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
</div>

<!-- blogs are displayed on the website by the system -->
<h2 class="postTitle">Posts</h2>
<div class="container">
    <div class="card">
        <div class="card-header">
            <?php echo isset($row['title']); ?>
        </div>
        <div class="card-body">
            <p class="card-text"><?php echo isset($row['body']); ?></p>
        </div>
        <div class="card-footer">
            <small class="text-muted"><?php echo isset($row['date_created']); ?></small>
        </div>
    </div>
    <button type="button" class="btn btn-primary">edit</button>
    <button type="button" class="btn btn-primary">delete</button>
    <button type="button" class="btn btn-primary">ban a user</button>
</div>

<?php require 'includes/footer.php' ?>