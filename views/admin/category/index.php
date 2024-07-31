
<?php
include __DIR__ . '/../layouts/sidebar.php';
?>

<div class="table-responsive">
    <div class="d-flex justify-content-end">
        <a href="index.php?controller=Category&action=create" class="btn btn-primary">Add Category</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($categories as $category) : ?>
                <tr>
                    <td><?php echo $category['id']; ?></td>
                    <td><?php echo $category['name']; ?></td>
                    <td>
                        <div class="btn-group">
                            <a href="index.php?controller=Category&action=update" class="btn btn-secondary">Edit</a>
                            <a href="index.php?controller=Category&action=destroy&id=<?php echo $category['id']; ?>" class="btn btn-danger">Delete</a>
                        </div>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?php
include __DIR__ . '/../layouts/footer.php';
?>