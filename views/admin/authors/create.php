<?php
include __DIR__ . '/../layouts/sidebar.php';
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-6">
            <h1 class="text-align-start">Add Authors</h1>
        </div>
        <div class="col-sm-6" style="margin-top: 40px; padding-left: 450px;">
            <ul class="breadcrumbs">
                <li><a href="">Home</a></li>
                <li class="divider">/</li>
                <li><a href="" class="active">Add Author</a></li>
            </ul>
        </div>
    </div>
</div>
<div>
    <form action="index.php?controller=Author&action=store" method="POST">
        <div class="row">
        <div class="col-12 col-md-4">
                <div class="form-group">
                    <input class="form-control" type="file" name="image">
                    <?php if (isset($error)) : ?>
                        <span class="text-danger"><?php echo $error; ?></span>
                    <?php endif;  ?>
                </div>
            </div>
            <div class="col-12 col-md-5">
            <div class="col-sm-6">
                        <label for="id">Author_Id</label>
                        <input type="number" class="form-control" name="id">
                        <?php if (isset($error)) : ?>
                            <span class="text-danger"><?php echo $error; ?></span>
                        <?php endif;  ?>
                    </div>
                <div class="row mb-3">
                <div class="col-sm-12">
                        <label for="firstName">First_Name</label>
                        <input type="text" class="form-control" name="firstName">
                        <?php if (isset($error)) : ?>
                            <span class="text-danger"><?php echo $error; ?></span>
                        <?php endif;  ?>
                    </div>
                    <div class="row mb-3">
                    <div class="col-sm-12">
                        <label for="lastName">Last_Name</label>
                        <input type="text" class="form-control" name="lastName">
                        <?php if (isset($error)) : ?>
                            <span class="text-danger"><?php echo $error; ?></span>
                        <?php endif;  ?>
                    </div>
                </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-6">
                        <label for="birthDate">Birth_Date</label>
                        <input type="date" class="form-control" name="birthDate">
                        <?php if (isset($error)) : ?>
                            <span class="text-danger"><?php echo $error; ?></span>
                        <?php endif;  ?>
                    </div>
                    <div class="col-sm-6">
                        <label for="deadDate">Dead_Date</label>
                        <input type="date" class="form-control" name="deadDate">
                        <?php if (isset($error)) : ?>
                            <span class="text-danger"><?php echo $error; ?></span>
                        <?php endif;  ?>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-12">
                        <label for="biography">Biography</label>
                        <textarea name="biography" class="form-control""></textarea>
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