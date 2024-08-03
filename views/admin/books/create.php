<?php
include __DIR__ . '/../layouts/sidebar.php';
?>
<div class="container-float">
    <div class="row">
        <div class="col-sm-6">
            <h1 class="text-align-start">Add Books</h1>
        </div>
        <div class="col-sm-6" style="margin-top: 40px; padding-left: 450px;">
            <ul class="breadcrumbs">
                <li><a href="">Home</a></li>
                <li class="divider">/</li>
                <li><a href="" class="active">Add Book</a></li>
            </ul>
        </div>
    </div>
</div>
<div>
    <form action="index.php?controller=Book&action=store" method="POST">
        <div class="container-float">
            <div class="row">
                <div class="col-sm-6">
                    <label for="isbn">ISBN</label>
                    <input type="int" class="form-control" name="isbn">
                </div>
                <div class="col-sm-6">
                    <label for="authorid">Author_ID</label>
                    <input type="int" class="form-control" name="authorid">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" name="title">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <label for="bookid">Book_ID</label>
                    <input type="text" class="form-control" name="bookid">
                </div>
                <div class="col-sm-6">
                    <label for="publication">Publication_Year</label>
                    <input type="text" class="form-control" name="publication">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <label for="genreid">Genre_ID</label>
                    <input type="text" class="form-control" name="genreid">
                </div>
                <div class="col-sm-6">
                    <label for="nocopies">Number_of_Copies</label>
                    <input type="text" class="form-control" name="nocopies">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <label for="description">Description</label>
                    <textarea name="description" class="form-control""></textarea>
                </div>
            </div>
        </div>
        <div>
            <button class="btn btn-primary" type="submit">Submit</button>
        </div>
    </form>
</div>
<div class="card" style="width: 18rem;">
    <img src="" alt="image" class="card-img-top">
    <div class="card-body">
        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
    </div>
</div>

<?php
include __DIR__ . '/../layouts/footer.php';
?>