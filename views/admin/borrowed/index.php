<?php
include __DIR__ . '/../layouts/sidebar.php';
?>
<div class="table-responsive">
    <div class="d-flex justify-content-end">
        <a href="index.php?controller=Borrowed&action=create" class="btn btn-primary">Add Borrowed Book</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>Borrowing_ID</th>
                <th>Book_ID</th>
                <th>User_ID</th>
                <th>Borrowing_Date</th>
                <th>Due_Date</th>
                <th>Return_Date</th>
                <th>Returned</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td >2954</td>
                <td >6785</td>
                <td >7512</td>
                <td >07/01/2023</td>
                <td>07/02/2024</td>
                <td>07/03/2024</td>
                <td >TRUE</td>
                <td>
                    <div class="btn-group">
                        <a href="index.php?controller=Borrowed&action=edit" class="btn btn-secondary">Edit</a>
                        <a href="index.php?controller=Borrowed&action=destroy" class="btn btn-danger">Delete</a>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<?php
include __DIR__ . '/../layouts/footer.php';
?>