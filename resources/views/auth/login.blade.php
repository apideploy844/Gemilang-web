<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Favicon -->
    <link rel="icon" href="icon-gemilang.png" type="image/png">
    <link rel="shortcut icon" href="icon-gemilang.png" type="image/png">
    
    <title>Login Account</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link rel="stylesheet" href="assets/css/login.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="wrapper">
        <div class="icon">
            <!-- Ganti URL gambar di sini -->
            <img src="assets/img/banner/icon-gemilang.png" alt="Icon Gemilang">
        </div>
        <div class="text-center mt-4 name"> Gemilang </div>
        <form class="p-3 mt-3">
            <div class="input-field d-flex align-items-center">
                <span class="far fa-user"></span> 
                <input type="text" name="email" id="userName" placeholder="Email">
            </div>
            <div class="input-field d-flex align-items-center"> 
                <span class="fas fa-key"></span> 
                <input type="password" name="password" id="pwd" placeholder="Password">
            </div>
            <button class="btn mt-3">Login</button>
        </form>
        <div class="text-center fs-6"> 
            <a href="/forgot-password">Forgot password?</a> or <a href="/register">Sign up</a> 
        </div>
        <div class="text-center mt-3">
            <a href="/  " class="btn btn-secondary">Kembali ke Dashboard</a>
        </div>
    </div>
</body>
</html>
