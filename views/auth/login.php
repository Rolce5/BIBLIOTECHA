<!DOCTYPE html>
<htm lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body style="background-color: #f5f5dc;">
    <div class="container d-flex justify-content-center align-items-center vh-100 rounded">
        <div class="card p-4 shadow-sm rounded">
            <h2 class="mb-4 text-center">Login</h2>
            <form>
                <div class="form-group">
                    <label for="username">Username or Email</label>
                    <input type="text" id="username" name="username" class="form-control" placeholder="Enter Username or Email" required>
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
                <div class="d-flex justify-content-end mb-3">
                    <a href="index.php?controller=ForgotPassword&action=showForm" class="text-primary">Forgot password?</a>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Login</button>
                <p class="mt-3 text-center">Don't have an account? <a href="index.php?controller=Register&action=showRegisterForm" class="text-primary">Create an account</a></p>
            </form>
        </div>
    </div>
    <script src="../BIBLIOTECHA/public/assets/js/app.js"></script>
</body>
</htm