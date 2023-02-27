<?php require 'header.php' ?>

<h2>We'd love to hear from you!</h2>

<form class="Form" id="ReportForm" action="processReportForm.php" method="post">
    <div class="mb-3">
        <label for="email" class="form-label">Enter Your Email address</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
    </div>
    <div class="mb-3">
        <label for="message" class="form-label">What would you like tell us :)
        </label>
        <textarea class="form-control" id="message" rows="3"></textarea>
    </div>
    <div class="mb-3">
        <input class="form-control" type="submit" name="submit" value="Submit">
    </div>
</form>

<h2>Report a User</h2>

<form class="Form" id="ReportForm" action="processReportForm.php" method="post">
    <div class="mb-3">
        <label for="email" class="form-label">Enter Your Email address</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
    </div>
    <div class="mb-3">
        <label for="message" class="form-label">What is the name of the user
            you have chosen to report and what is the issue?
        </label>
        <textarea class="form-control" id="message" rows="3"></textarea>
    </div>
    <div class="mb-3">
        <input class="form-control" type="submit" name="submit" value="Submit">
    </div>
</form>

<?php require 'footer.php' ?>