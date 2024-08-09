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
                <th>id</th>
                <th>First_Name</th>
                <th>Last_Name</th>
                <th>Birth_Date</th>
                <th>Dead_Date</th>
                <th>Biography</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
           <!------- <tr>
                <td style="width: 80px;">6754</td>
                <td style="width: 100px;">John the Ripper</td>
                <td style="width: 80px;">757</td>
                <td style="width: 80px;">2002</td>
                <td>uuuu</td>
                <td>3213</td>
                <td style="width: 200px;">Its a book about the most popular serial killer from England back in the 90's</td>
                <td style="width: 50px;">129</td>
                <td>
                    <div class="btn-group">
                        <a href="index.php?controller=Author&action=edit" class="btn btn-secondary">Edit</a>
                        <a href="index.php?controller=Author&action=destroy" class="btn btn-danger">Delete</a>
                    </div>
                </td>
            </tr>----->
            <?php foreach ($authors as $author) : ?>
                <tr>
                    <td><?php echo $author['id']; ?></td>
                    <td><?php echo $author['firstName']; ?></td>
                    <td><?php echo $author['lastName']; ?></td>
                    <td><?php echo $author['birthDate']; ?></td>
                    <td><?php echo $author['deadDate']; ?></td>
                    <td><?php echo $author['biography']; ?></td>
                    <td>
                        <div class="btn-group">
                            <a href="index.php?controller=Author&action=edit&id=<?php echo $author['id']; ?>" class="btn btn-secondary">Edit</a>
                            <a href="index.php?controller=Author&action=destroy&id=<?php echo $author['id']; ?>" class="btn btn-danger">Delete</a>
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