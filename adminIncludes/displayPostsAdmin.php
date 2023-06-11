<?php
ini_set("display_errors", 1);
error_reporting(E_ALL);
?>


<?php

// Finds the comments in the MySQL database
require_once '../includes/dbconnect.php';

$postID = isset($_SESSION['postID']);
$commentID = isset($_SESSION['commentID']);
$userno = ($_SESSION['userno']);
$title = isset($_SESSION['title']);
$postText = isset($_SESSION['postText']);
$commentText = isset($_SESSION['commentText']);
$date_created = isset($_SESSION['date_created']);

$sql = "SELECT * FROM posts";
$postResult = mysqli_query($conn, $sql);

if (mysqli_num_rows($postResult) > 0) {
    while ($postID = mysqli_fetch_assoc($postResult)) {
        // Displays the posts on the page
        if (!empty($postID)) {
            echo '<div class="container">';
            echo '<h5>' . $postID["title"] . '</h5>
            <input name="post_text" value="' . $postID['postText'] . '">';
            echo '<p>Posted by user ' . $postID['userno'] . ' on ' . $postID['date_created'] . '</p>';
            echo '</div>';

            // Edit functionality 
            echo '<div class="container">
        <form method="post" name="editComment" action="../adminIncludes/editPostAdmin.php">
        <input type="hidden" name="userno" value="' . ($postID['userno']) . '">
        <input type="hidden" name="postID" value="' . ($postID['postID']) . '">
        <input type="hidden" name="postText" value="' . ($postID['postText']) . '">
        <button type="submit" name="postEdit">Edit</button>
        </form> 
        </div>';
            // Delete functionality
            echo '<div class="container">
        <form method="post" action="../adminIncludes/deletePostAdmin.php">
        <input type="hidden" name="postID" value="' . $postID['postID'] . '">
        <button type="submit" name="postDelete">Delete</button>
        </form>
        </div>';

            // Comment input for user
            echo '<div class="container">
                    <div class="card-commentText">
                    <form method="post" action="../adminIncludes/processNewCommentAdmin.php">
                    <div class="form-group">
                    <textarea class="form-control" id="commentText" name="commentText" rows="10" required="yes">Add your comment to the post</textarea><br><br>
                    <input class="form-control" name="submitComment" type="submit" value="Submit">
                    </div>
                    </form>
                    </div>
                    </div>';
        }

        // Query for grabbing data from comments table
        $sql = "SELECT * FROM comments";
        $commentResult = $conn->query($sql);
        isset($_POST['date_created']);
        // Checks for comments while there are comments
        if (mysqli_num_rows($commentResult) > 0) {
            while ($comment = mysqli_fetch_assoc($commentResult)) {
                // Displayed comments
                echo 'div class="container"';
                echo '<div class="card-commentText">';
                echo '<p> ' . ($comment['commentText']) . '</p>
                    </div>
                    <div class="card-footer">
                    <div class="text-muted"> ' . ($comment["date_created"]) .
                    '</div>
                    </div>';

                // Edit comment functionality
                echo '<div class="container">';
                echo '<form class="edit-form" method="post" action="../adminIncludes/editCommentAdmin.php">
                    <input type="hidden" name="userno" value="' . $comment['userno'] . '">
                    <input type="hidden" name="commentID" value="' . $comment['commentID'] . '">
                    <input type="hidden" name="commentText" value="' . $comment['commentText'] . '">
                    <button type="submit" name="commentEdit">Edit</button>
                    </form>';

                // Delete comment functionality
                echo '<form class="delete-form" method="post" action="../adminIncludes/deleteCommentAdmin.php">
                    <input type="hidden" name="commentID" class="form-control" value="' . $comment['commentID'] . '">
                    <button type="submit" name="commentDelete">Delete</button>
                    </form>';
                echo '</div>';
                echo '</div>';
            }
        }
    }
} else {
    echo 'No posts yet';
}
