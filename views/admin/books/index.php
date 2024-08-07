<?php
include __DIR__ . '/../layouts/sidebar.php';
?>
<div class="table-responsive">
    <div class="d-flex justify-content-end">
        <a href="index.php?controller=Book&action=create" class="btn btn-primary">Add Book</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>ISBN</th>
                <th>Author_ID</th>
                <th>Title</th>
                <th>Book_ID</th>
                <th>Publication_Year</th>
                <th>Genre_ID</th>
                <th>Number_of_Copies</th>
                <th>Description</th>
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
                        <a href="index.php?controller=Book&action=edit" class="btn btn-secondary">Edit</a>
                        <a href="index.php?controller=Book&action=destroy" class="btn btn-danger">Delete</a>
                    </div>
                </td>
            </tr>----->
            <?php foreach ($books as $book) : ?>
                <tr>
                    <td><?php echo $book['isbn']; ?></td>
                    <td><?php echo $book['authorid']; ?></td>
                    <td><?php echo $book['title']; ?></td>
                    <td><?php echo $book['bookid']; ?></td>
                    <td><?php echo $book['publication']; ?></td>
                    <td><?php echo $book['genreid']; ?></td>
                    <td><?php echo $book['nocopies']; ?></td>
                    <td><?php echo $book['descriptions']; ?></td>
                    <td>
                        <div class="btn-group">
                            <a href="index.php?controller=Book&action=edit&id=<?php echo $book['id']; ?>" class="btn btn-secondary">Edit</a>
                            <a href="index.php?controller=Book&action=destroy&id=<?php echo $book['id']; ?>" class="btn btn-danger">Delete</a>
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