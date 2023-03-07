<?php require 'header.php' ?>

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

<div class="mb-3">
    <label for="title" class="form-label">title</label>
    <input type="text" class="form-control" id="title" name="title">
</div>

<?php
// handle posting messages
if ($_POST['submit'] == 'post') {
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $content = mysqli_real_escape_string($conn, $_POST['content']);
    $category = mysqli_real_escape_string($conn, $_POST['category']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);

    // insert message data into the database
    $query = "INSERT INTO messages (title, content, category, username) VALUES ('$title', '$content', '$category', '$username')";
    mysqli_query($conn, $query);

    echo 'Message posted';
}

// display messages
$query = "SELECT * FROM messages ORDER BY date_created DESC";
$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($result)) {
    echo '<div class="message">';
    echo '<h2>' . $row['title'] . '</h2>';
    echo '<p>' . $row['content'] . '</p>';
    echo '<p>Posted by ' . $row['username'] . ' on ' . $row['date_created'] . '</p>';
    echo '</div>';
}
?>

<?php require 'footer.php' ?>