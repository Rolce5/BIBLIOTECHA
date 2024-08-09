<?php
include __DIR__ . '/../layouts/sidebar.php';
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-6">
            <h1 class="text-align-start">Edit Books</h1>
        </div>
        <div class="col-sm-6" style="margin-top: 40px; padding-left: 450px;">
            <ul class="breadcrumbs">
                <li><a href="">Home</a></li>
                <li class="divider">/</li>
                <li><a href="" class="active">Edit Book</a></li>
            </ul>
        </div>
    </div>
</div>
<div>
    <form action="index.php?controller=Book&action=update" method="POST">
        <input type="hidden" name="book_id" value="<?php echo $book['id']; ?>">
        <div class="row">
            <div class="col-12 col-md-4">

            </div>
            <div class="col-12 col-md-8">
                <div class="row mb-3">
                    <div class="col-sm-6">
                        <label for="isbn">ISBN</label>
                        <input type="number" class="form-control" name="isbn" value="<?php echo $book['isbn']; ?>">
                    </div>
                    <div class="col-sm-6">
                        <label for="authorid">Author_ID</label>
                        <input type="number" class="form-control" name="authorid" value="<?php echo $book['authorid']; ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-12">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" name="title" value="<?php echo $book['title']; ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-6">
                        <label for="bookid">Book_ID</label>
                        <input type="number" class="form-control" name="bookid" value="<?php echo $book['bookid']; ?>">
                    </div>
                    <div class="col-sm-6">
                        <label for="publication">Publication_Year</label>
                        <input type="date" class="form-control" name="publication" value="<?php echo $book['publication']; ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-6">
                        <label for="genreid">Genre_ID</label>
                        <input type="number" class="form-control" name="genreid" value="<?php echo $book['genreid']; ?>">
                    </div>
                    <div class="col-sm-6">
                        <label for="nocopies">Number_of_Copies</label>
                        <input type="number" class="form-control" name="nocopies" value="<?php echo $book['nocopies']; ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-12">
                        <label for="description">Description</label>
                        <textarea name="descriptions" class="form-control" value="<?php echo $book['descriptions']; ?>"></textarea>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <button class=" btn btn-primary" type="submit">Update</button>
        </div>
    </form>
</div>
<?php
include __DIR__ . '/../layouts/footer.php';
?>