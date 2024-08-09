<?php
include __DIR__ . '/../layouts/sidebar.php';
?>

<div>
    <form action="index.php?controller=Category&action=update" method="POST">
        <input type="hidden" name="category_id" value="<?php echo $category['id']; ?>">
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-6">
            <h1 class="text-align-start">Edit Category</h1>
        </div>
        <div class="col-sm-6" style="margin-top: 40px; padding-left: 450px;">
            <ul class="breadcrumbs">
                <li><a href="">Home</a></li>
                <li class="divider">/</li>
                <li><a href="" class="active">Edit Category</a></li>
            </ul>
        </div>
    </div>
</div>
<div>
    <form action="index.php?controller=Category&action=update" method="POST">
        <input type="hidden" name="category_id" value="<?php echo $category['id']; ?>">
        <div class="row mb-3">
            <div class="col-md-4">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" value="<?php echo $category['name']; ?>">
            </div>
        </div>
        <div ><button class="btn btn-primary" type="submit">Edit</button></div>
    </form>
</div>

<?php
include __DIR__ . '/../layouts/footer.php';
?>