<?php
include __DIR__ . '/../layouts/sidebar.php';
?>
<div>
    <h1>Add Books</h1>
    <ul class="breadcrumbs">
        <li><a href="">Home</a></li>
        <li class="divider">/</li>
        <li><a href="" class="active">Dashboard</a></li>
    </ul>
</div>
<div>
    <form action="" method="POST">
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">@</span>
            <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon2">https://example.com/users/</span>
            <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon2">
        </div>
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Username" aria-label="Username">
            <span class="input-group-text">@</span>
            <input type="text" class="form-control" placeholder="Server" aria-label="Server">
        </div>
    </form>
</div>
    <div class="card" style="width: 18rem;">
        <img src="" alt="image" class="card-img-top">
        <div class="card-body">
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        </div>
    </div>

<?php
include __DIR__ . '/../layouts/footer.php';
?>