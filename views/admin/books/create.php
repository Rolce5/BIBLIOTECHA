<?php
include __DIR__ . '/../layouts/sidebar.php';
?>
<div class="container-fluid">
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
        <div class="row">
            <div class="col-12 col-md-4">

            </div>
            <div class="col-12 col-md-8">
                <div class="row mb-3">
                    <div class="col-sm-6">
                        <label for="isbn">ISBN</label>
                        <input type="number" class="form-control" name="isbn">
                        <?php if (isset($error)) : ?>
                            <span class="text-danger"><?php echo $error; ?></span>
                        <?php endif;  ?>
                    </div>
                    <div class="col-sm-6">
                        <label for="authorid">Author_ID</label>
                        <input type="number" class="form-control" name="authorid">
                        <?php if (isset($error)) : ?>
                            <span class="text-danger"><?php echo $error; ?></span>
                        <?php endif;  ?>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-12">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" name="title">
                        <?php if (isset($error)) : ?>
                            <span class="text-danger"><?php echo $error; ?></span>
                        <?php endif;  ?>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-6">
                        <label for="bookid">Book_ID</label>
                        <input type="number" class="form-control" name="bookid">
                        <?php if (isset($error)) : ?>
                            <span class="text-danger"><?php echo $error; ?></span>
                        <?php endif;  ?>
                    </div>
                    <div class="col-sm-6">
                        <label for="publication">Publication_Year</label>
                        <input type="date" class="form-control" name="publication">
                        <?php if (isset($error)) : ?>
                            <span class="text-danger"><?php echo $error; ?></span>
                        <?php endif;  ?>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-6">
                        <label for="genreid">Genre_ID</label>
                        <input type="number" class="form-control" name="genreid">
                        <?php if (isset($error)) : ?>
                            <span class="text-danger"><?php echo $error; ?></span>
                        <?php endif;  ?>
                    </div>
                    <div class="col-sm-6">
                        <label for="nocopies">Number_of_Copies</label>
                        <input type="number" class="form-control" name="nocopies">
                        <?php if (isset($error)) : ?>
                            <span class="text-danger"><?php echo $error; ?></span>
                        <?php endif;  ?>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-12">
                        <label for="descriptions">Description</label>
                        <textarea name="descriptions" class="form-control""></textarea>
                        <?php if (isset($error)) : ?>
                            <span class=" text-danger"><?php echo $error; ?></span>
                        <?php endif;  ?>
                </div>
            </div>
            </div>
        </div>
        <div>
            <button class=" btn btn-primary" type="submit">Submit</button>
        </div>
    </form>
</div>

<?php
include __DIR__ . '/../layouts/footer.php';
?>

            <div class="form-group">
                <button class="btn btn-primary" 
                        type="submit" 
                        name="upload">UPLOAD</button>
            </div>
            <div class="card" style="width: 18rem;">
                    <img src="" alt="image" class="card-img-top">
                    <div class="card-body">
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>