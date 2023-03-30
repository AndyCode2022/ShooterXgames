<?php require 'includes/header.php' ?>


<div class="container">
    <h2>We'd love to hear from you!</h2>

    <form id="ReportForm" action="processReportForm.php" method="post">

        <div class="mb-3">
            <label for="email" class="form-label">Enter Your Email address</label>
            <input type="email" required="true" class="form-control" id="email" name="email" required="true" placeholder="name@example.com">
        </div>

        <div class="mb-3">
            <label for="message" class="form-label">What would you like tell us :)</label>
            <textarea class="form-control" id="message" rows="3" required="true"></textarea>
        </div>

        <div class="mb-3">
            <button type="submit" class="btn btn-primary" required="true" name="submit" value="Submit">Submit</button>
        </div>
    </form>

    <h2>Report a User</h2>

    <form id="ReportForm" action="processReportForm.php" method="post">

        <div class="mb-3">
            <label for="email" class="form-label">Enter Your Email address</label>
            <input type="email" class="form-control" id="email" name="email" required="true" placeholder="name@example.com">
        </div>

        <div class="mb-3">
            <label for="message" class="form-label">What is the name of the user
                you have chosen to report and what is the issue?
            </label>
            <textarea class="form-control" id="message" required="true" rows="3"></textarea>
        </div>

        <button type="submit" class="btn btn-primary" name="submit" value="Submit">Submit</button>


    </form>
</div>

<?php require 'includes/footer.php' ?>