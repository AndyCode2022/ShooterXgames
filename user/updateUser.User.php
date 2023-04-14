<?php require 'userIncludes/headerUser.php'; ?>

<div class="container">

    <form id="registerForm" action="userIncludes/processUpdateUser.User.php" method="post">

        <h2>Update User</h2>

        <div class="mb-3">
            <label for="firstname" class="form-label">First Name</label>
            <input type="text" class="form-control" name="firstname" value="<?php echo isset($row['firstname']) ?>">
        </div>

        <div class="mb-3">
            <label for="lastname" class="form-label">Last Name</label>
            <input type="text" class="form-control" name="lastname" id="lastname" value="<?php echo isset($row['lastname']) ?>">
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" name="email" id="email" value="<?php echo isset($row['email']) ?>">
        </div>

        <div class="mb-3">
            <label for="username" class="form-label">username</label>
            <input type="text" class="form-control" name="username" id="username" value="<?php echo isset($row['username']) ?>">
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">password</label>
            <input type="password" class="form-control" name="password" id="password" value="<?php echo isset($row['password']) ?>">
        </div>

        <div class="mb-3">
            <label for="confirmPassword" class="form-label">Confirm Password</label>
            <input type="password" name="confirmPassword" class="form-control" id="confirmPassword" value="<?php echo isset($row['confirmPassword']) ?>">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>

</div>


<?php require 'userIncludes/footerUser.php'; ?>