<?php
include __DIR__ . '/../layouts/sidebar.php';
?>

<div>
    <form action="index.php?controller=Category&action=store" method="POST">
        <div class="row mb-3>
            <div class="col-md-4">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name">
                <?php if(isset($error)) : ?>
                <span class="text-danger"><?php echo $error; ?></span>
                <?php endif;  ?>
            </div>
        </div>
        <div ><button class="btn btn-primary" type="submit">Submit</button></div>
    </form>
</div>

<?php
include __DIR__ . '/../layouts/footer.php';
?>