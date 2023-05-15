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
        
        // Displayed comments
        echo '<div class="card-postText">
         <p class="card-text"> ' . ($row['commentText']) . '</p>
         </div>
         <div class="card-footer">
         <small class="text-muted"> ' . ($row['date_created']) . '</small>
        </div>
        </div>';

        // Edit & Delete functionality 
        echo '<div class="container">
        <form method="post" action="includes/editComment.php">
        <input type="submit" value="Edit">
        </form> 
 
        <form method="post" action="includes/deleteComment.php">
        <input type="submit" value="delete">
        </form>
        </div>';
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