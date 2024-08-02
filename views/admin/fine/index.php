<?php
include __DIR__ . '/../layouts/sidebar.php';
?>
<div class="table-responsive">
    <div class="d-flex justify-content-end">
        <a href="index.php?controller=Fine&action=create" class="btn btn-primary">Add Fine</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>Fine_ID</th>
                <th>Book_ID</th>
                <th>User_ID</th>
                <th>Fine_Amount</th>
                <th>Fine_incurred_Date</th>
                <th>Fine_Paid_Date</th>
                <th>Fine_Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td >0754</td>
                <td >9384</td>
                <td >1993</td>
                <td >500</td>
                <td>01/01/2000</td>
                <td>02/03/2000</td>
                <td >paid</td>
                <td>
                    <div class="btn-group">
                        <a href="index.php?controller=Fine&action=edit" class="btn btn-secondary">Edit</a>
                        <a href="index.php?controller=Fine&action=destroy" class="btn btn-danger">Delete</a>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<?php
include __DIR__ . '/../layouts/footer.php';
?>