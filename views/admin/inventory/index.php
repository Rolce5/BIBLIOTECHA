<?php
include __DIR__ . '/../layouts/sidebar.php';
?>
<div class="table-responsive">
    <div class="d-flex justify-content-end">
        <a href="index.php?controller=Inventory&action=create" class="btn btn-primary">Add Inventory</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>Inventory_ID</th>
                <th>Book_ID</th>
                <th>Available_Copies</th>
                <th>Shelf_Location</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td >7754</td>
                <td >9984</td>
                <td >13</td>
                <td >Behind</td>
                <td>
                    <div class="btn-group">
                        <a href="index.php?controller=Inventory&action=edit" class="btn btn-secondary">Edit</a>
                        <a href="index.php?controller=Inventory&action=destroy" class="btn btn-danger">Delete</a>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<?php
include __DIR__ . '/../layouts/footer.php';
?>