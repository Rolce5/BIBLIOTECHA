<?php
include __DIR__ . '/../layouts/sidebar.php';
?>
<div class="table-responsive">
    <div class="d-flex justify-content-end">
        <a href="index.php?controller=User&action=create" class="btn btn-primary">Add User</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>User_ID</th>
                <th>First_Name</th>
                <th>Last_Name</th>
                <th>Email</th>
                <th>Phone_Number</th>
                <th>Adress</th>
                <th>Membership_Status</th>
                <th>Membership_Expiration_Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td >2754</td>
                <td >John</td>
                <td >Legend</td>
                <td >johnlegend@gmail.com</td>
                <td>674567321</td>
                <td>Buea</td>
                <td >active</td>
                <td >07/09/2024</td>
                <td>
                    <div class="btn-group">
                        <a href="index.php?controller=User&action=edit" class="btn btn-secondary">Edit</a>
                        <a href="index.php?controller=User&action=destroy" class="btn btn-danger">Delete</a>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<?php
include __DIR__ . '/../layouts/footer.php';
?>