<?php
include __DIR__ . '/../layouts/sidebar.php';
?>
<div class="table-responsive">
    <div class="d-flex justify-content-end">
        <a href="index.php?controller=Reservation&action=create" class="btn btn-primary">Add Reservation</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>Reservation_ID</th>
                <th>Book_ID</th>
                <th>User_ID</th>
                <th>Reservation_Date</th>
                <th>Fulfilled</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td >7714</td>
                <td >9980</td>
                <td >1339</td>
                <td >02/04/2023</td>
                <td>TRUE</td>
                <td>
                    <div class="btn-group">
                        <a href="index.php?controller=Reservation&action=edit" class="btn btn-secondary">Edit</a>
                        <a href="index.php?controller=Reservation&action=destroy" class="btn btn-danger">Delete</a>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<?php
include __DIR__ . '/../layouts/footer.php';
?>