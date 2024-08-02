<?php
include __DIR__ . '/../layouts/sidebar.php';
?>
<div class="table-responsive">
    <div class="d-flex justify-content-end">
        <a href="index.php?controller=Author&action=create" class="btn btn-primary">Add Author</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>Author_ID</th>
                <th>First_Name</th>
                <th>Last_Name</th>
                <th>Biography</th>
                <th>Birth_Date</th>
                <th>Death_Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td >6794</td>
                <td >John</td>
                <td >Legend</td>
                <td >He was a good man and lived a good life</td>
                <td>07/01/1970</td>
                <td>07/01/2023</td>
                <td>
                    <div class="btn-group">
                        <a href="index.php?controller=Author&action=edit" class="btn btn-secondary">Edit</a>
                        <a href="index.php?controller=Author&action=destroy" class="btn btn-danger">Delete</a>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<?php
include __DIR__ . '/../layouts/footer.php';
?>