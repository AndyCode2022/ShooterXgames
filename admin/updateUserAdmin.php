<?php require 'adminIncludes/headerAdmin.php' ?>
<?php require 'adminIncludes/adminDetails.php' ?>

<div class="container">
    <!-- Input fields for user to update their details.
                When you user has entered their information then the new details
                will be updated in the MySQL database -->
    <form id="registerForm" method="post" action="../includes/processUpdateUser.php">

        <h2>Update User</h2>

        <div class="mb-3">
            <label for="firstname" class="form-label">First Name</label>
            <input type="text" class="form-control" name="firstname" value="<?php echo $row['firstname'] ?>">
        </div>

        <div class="mb-3">
            <label for="lastname" class="form-label">Last Name</label>
            <input type="text" class="form-control" name="lastname" id="lastname" value="<?php echo ($row['lastname']) ?>">
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" name="email" id="email" value="<?php echo ($row['email']) ?>">
        </div>

        <div class="mb-3">
            <label for="username" class="form-label">username</label>
            <input type="text" class="form-control" name="username" id="username" value="<?php echo ($row['username']) ?>">
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">password</label>
            <input type="password" class="form-control" name="password" id="password" value="<?php echo ($row['password']) ?>">
        </div>

        <!-- <div class="mb-3">
            <label for="confirmPassword" class="form-label">Confirm Password</label>
            <input type="password" name="confirmPassword" class="form-control" id="confirmPassword">
        </div> -->

        <button type="submit" class="btn btn-primary">Update</button>
    </form>

</div>


<?php require '../adminIncludes/footerAdmin.php' ?>