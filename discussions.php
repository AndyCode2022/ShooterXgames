<?php require 'includes/header.php' ?>

<!-- Search bar -->
<div class="container"></div>
<form class="d-flex" method="post" action="includes/processSearch.php">
    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success" type="submit">Search</button>
</form>
</div>

<!-- First row categories -->
<div class="container">
    <div class="row">
        <div class="col-md-2">
            <div class="mb-3">
                <form action="includes/processNewPost.php" method="post">
                    <label for="exampleFormControlInput1" required="true" class="form-label">Please give a brief title for your question</label>
                    <input type="title" class="form-control" id="exampleFormControlInput1" placeholder="Your title!" required="true">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" required="true"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <div class="col-md-2">
            <form action="includes/processNewPost.php" method="post">
                <label for="exampleFormControlInput1" required="true" class="form-label">Please give a brief title for your question</label>
                <input type="title" class="form-control" id="exampleFormControlInput1" placeholder="Your title!" required="true">
                <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" required="true"></textarea>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <div class="col-md-2">
            <form action="includes/processNewPost.php" method="post">
                <label for="exampleFormControlInput1" required="true" class="form-label">Please give a brief title for your question</label>
                <input type="title" class="form-control" id="exampleFormControlInput1" placeholder="Your title!" required="true">
                <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" required="true"></textarea>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

<!-- Second row categories -->
<div class="row">
    <div class="col-md-2">
        <div class="col-md-2">
            <form action="includes/processNewPost.php" method="post">
                <label for="exampleFormControlInput1" required="true" class="form-label">Please give a brief title for your question</label>
                <input type="title" class="form-control" id="exampleFormControlInput1" placeholder="Your title!" required="true">
                <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" required="true"></textarea>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <div class="col-md-2">
            <form action="includes/processNewPost.php" method="post">
                <label for="exampleFormControlInput1" required="true" class="form-label">Please give a brief title for your question</label>
                <input type="title" class="form-control" id="exampleFormControlInput1" placeholder="Your title!" required="true">
                <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" required="true"></textarea>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <div class="col-md-2">
            <form action="includes/processNewPost.php" method="post">
                <label for="exampleFormControlInput1" required="true" class="form-label">Please give a brief title for your question</label>
                <input type="title" class="form-control" id="exampleFormControlInput1" placeholder="Your title!" required="true">
                <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" required="true"></textarea>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

<img src="images/cycleFrontier.jpg" alt="The cycleFrontier gameplay image">

<?php require 'includes/footer.php' ?>