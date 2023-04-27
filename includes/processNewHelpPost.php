<?php

session_start();

require 'dbconnect.php';
require 'checkLogin.php';

if (isset($_POST['submit'])) {
    // Checks that the variables postID & userno are set
    if (isset($_SESSION['postID']) && isset($_SESSION['userno'])) {
        $postID = $_SESSION['postID'];
        $userno = $_SESSION['userno'];
        $title = $_POST['title'];
        $postText = $_POST['postText'];
        $date_created = date('Y-m-d H:i:s');

        // insert message data into the database
        $sql = "INSERT INTO posts (title, postText, date_created)
    VALUES ('$title', '$postText', '$date_created')";
        $stmt = $conn->prepare($sql);

        if ($stmt->execute()) {
            $postID = $stmt->postID;
            echo "New post created successfully. Post ID: $postID";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    } else {
        echo "Error: postID or userno not set";
    }
}

header('Location: ../help.php');
mysqli_close($conn);

?>







// display messages
// $query = "SELECT * FROM posts ORDER BY date_created DESC";
// $result = mysqli_query($conn, $query);

// while ($row = mysqli_fetch_assoc($result)) {
// echo '<div class="message">';
    // echo '<h2>' . $row['title'] . '</h2>';
    // echo '<p>' . $row['postText'] . '</p>';
    // echo '<p>Posted by ' . $row['username'] . ' on ' . $row['date_created'] . '</p>';
    // echo '</div>';
// }

// header('Location: ../discussions.php');
// mysqli_close($conn);