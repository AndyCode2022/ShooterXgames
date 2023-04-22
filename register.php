<?php require 'includes/header.php' ?>

<div class="container">
    <h2>Enter your details</h2>

    <form id="registerForm" action="includes/processNewUser.php" method="POST">

        <div class="mb-3">
            <label for="firstname" class="form-label">First Name</label>
            <input type="text" name="firstname" class="form-control" id="firstname" required>
        </div>

        <div class="mb-3">
            <label for="lastname" class="form-label">Last Name</label>
            <input type="text" name="lastname" class="form-control" id="lastname" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="email" required>
        </div>

        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" name="username" class="form-control" id="username" required>
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="password" required>
        </div>

        <div class="mb-3">
            <label for="confirmPassword" class="form-label">Confirm Password</label>
            <input type="password" name="confirmPassword" class="form-control" id="confirmPassword" required>
        </div>

        <button type="submit" class="btn btn-primary">Add User</button>
        <button type="reset" class="btn btn-secondary">Clear</button>

    </form>
</div>

<?php require 'footer.php' ?>