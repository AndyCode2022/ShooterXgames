   <!-- destroys session and makes user no longer
   a logged in user -->
   <?php
    session_start();
    session_destroy();
    header("Location: ../index.php");
    ?>