<?php
// Finds the comments in the MySQL database
require_once 'dbconnect.php';

$postID = isset($_POST['postID']);

$sql = "SELECT * FROM posts";
$postResult = mysqli_query($conn, $sql);

if (mysqli_num_rows($postResult) > 0) {
    while ($postText = mysqli_fetch_assoc($postResult)) {
        // Displays the posts on the page
        echo '<div class="container">
        <div class="post">
        <p>' . ($postText['title']) . '</p>
        <p>Posted by user ' . ($postText['postText']) . ' on ' . ($postText['date_created']) . '</p>'
        . '</div>';

    $sql = "SELECT * FROM comments";
    $commentResult = mysqli_query($conn, $sql);

    if (mysqli_num_rows($commentResult) > 0) {
        while ($commentText = mysqli_fetch_assoc($commentResult)) {
        // Displayed comments
        echo '<div class="card-postText">
         <p class="card-text"> ' . ($commentText['commentText']) . '</p>
         </div>
         <div class="card-footer">
         <div class="text-muted"> ' . ($commentText['date_created']) . '</div>
         
        </div>
        </div>';
        }
    }

        
    }
} else {
    echo 'No posts yet';
}
?>

<!-- Checks for commentText & date and posts it on the discussions page -->
<?php
// if (isset($post['post']) && isset($date_created['date_created'])) {
//     echo '<p>' . $post['post'] . '</p>';
//     '<p>Posted on ' . $date_created['date_created'] . '</p>';
// } else {
//     echo '<div class="container">
//          Error: post or date not found.
//          </div>';
//     echo '</div>';
// }
?>