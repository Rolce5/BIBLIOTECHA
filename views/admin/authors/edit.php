<?php
include __DIR__ . '/../layouts/sidebar.php';
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-6">
            <h1 class="text-align-start">Edit Authors</h1>
        </div>
        <div class="col-sm-6" style="margin-top: 40px; padding-left: 450px;">
            <ul class="breadcrumbs">
                <li><a href="">Home</a></li>
                <li class="divider">/</li>
                <li><a href="" class="active">Edit Authors</a></li>
            </ul>
        </div>
    </div>
</div>
<div>
    <form action="index.php?controller=Author&action=update" method="POST">
        <input type="hidden" name="id" value="<?php echo $author['id']; ?>">
        <div class="row">
            <div class="col-12 col-md-8">
                <div class="row mb-3">
                    <div class="col-sm-6">
                        <label for="id">Author_Id</label>
                        <input type="number" class="form-control" name="id" value="<?php echo $author['id']; ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-6">
                        <label for="firstName">First_Name</label>
                        <input type="text" class="form-control" name="firstName" value="<?php echo $author['firstName']; ?>">
                    </div>
                    <div class="col-sm-6">
                        <label for="lastName">Last_Name</label>
                        <input type="text" class="form-control" name="lastName" value="<?php echo $author['lastName']; ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-6">
                        <label for="birthDate">Birth_Date</label>
                        <input type="date" class="form-control" name="birthDate" value="<?php echo $author['birthDate']; ?>">
                    </div>
                    <div class="col-sm-6">
                        <label for="deadDate">Dead_Date</label>
                        <input type="date" class="form-control" name="deadDate" value="<?php echo $author['deadDate']; ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-12">
                        <label for="biography">Biography</label>
                        <textarea name="biography" class="form-control" value="<?php echo $author['biography']; ?>"></textarea>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <button class=" btn btn-primary" type="submit">Update</button>
        </div>
    </form>
</div>

<?php
include __DIR__ . '/../layouts/footer.php';
?>