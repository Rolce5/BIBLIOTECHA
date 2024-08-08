<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../BIBLIOTECHA/public/assets/css/style.css">
</head>
<body style="background-color: #f5f5dc;">
    <div class="container-fluid d-flex justify-content-center align-items-center vh-100 my-5">
        <div class="card p-4 shadow-sm col-md-5">
            <h2 class="mb-4 text-center">Register</h2>
<<<<<<< HEAD
            <form>
=======
            <form method="POST" action="index.php?controller=Register&action=store">
>>>>>>> 53da967792afffa5f7d5aa82b8b5a39874948357
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" class="form-control" placeholder="Enter Name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" class="form-control" placeholder="Enter Email" required>
                </div>
                <div class="form-group">
                    <label for="matricule">Matricule No</label>
                    <input type="text" id="matricule" name="matricule" class="form-control" placeholder="Enter Matricule No" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <div class="input-group">
                        <input type="password" id="password" name="password" class="form-control" placeholder="Enter Password" required>
                        <div class="input-group-append" style="cursor: pointer;">
                            <span class="input-group-text" id="togglePassword"><i class="fas fa-eye"></i></span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="confirm-password">Confirm Password</label>
                    <div class="input-group">
                        <input type="password" id="confirm-password" name="confirm-password" class="form-control" placeholder="Confirm Password" required>
                        <div class="input-group-append" style="cursor: pointer;">
                            <span class="input-group-text" id="toggleConfirmPassword"><i class="fas fa-eye"></i></span>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Register</button>
                <p class="mt-3 text-center">Already have an account? <a href="index.php?controller=Login&action=showLoginForm" class="text-primary">Login here</a></p>
            </form>
        </div>
    </div>
    <script src="../BIBLIOTECHA/public/assets/js/app.js"></script>
</body>
</html>