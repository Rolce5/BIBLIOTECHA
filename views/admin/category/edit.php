<?php
include __DIR__ . '/../layouts/sidebar.php';
?>

<div>
    <form action="index.php?controller=Category&action=update" method="POST">
        <input type="text" name="category_id" value="<?php echo $category['id']; ?>">
        <div class="row mb-3>
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