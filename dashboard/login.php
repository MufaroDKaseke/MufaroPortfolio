<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mufaro Kaseke | Login</title>
  <link rel="stylesheet" href="../lib/animate/animate.css">
  <link rel="stylesheet" href="../lib/icomoon/icomoon.css">
  <link rel="stylesheet" href="../lib/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/responsive.css">
  <!-- Favicons -->
  <link href="../img/icon.png" rel="icon">
  <link href="../img/icon.png" rel="apple-touch-icon">
</head>
<body>
  
  
  <section class="login">
    <div class="container-fluid">
      <div class="row justify-content-center align-items-center">
        <div class="col-md-5 col-lg-4 img-container">
          <img src="img/svgs/login-bg-2.png" alt="" />
        </div>
        <div class="col-md-5 col-lg-4 form-container">
          <h1 class="text-center mb-5">Admin Login</h1>
          <form id="loginForm">
            <div class="">
              
              <div class="input-group mb-4">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <span class="icon-user"></span>
                  </span>
                </div>
                <input type="text" name="username" class="form-control pl-0" placeholder="Username">
              </div>
              
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <span class="icon-lock"></span>
                  </span>
                </div>
                <input type="password" name="password" class="form-control pl-0" placeholder="Password">
              </div>
              <button type="submit" class="btn btn-block">Login</button>
              <span class="d-block text-right forgot-password my-2">
                <a href="">Forgot Password</a>
              </span>
              
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  
  
  
  <script src="../lib/jquery/jquery-3.4.1.min.js"></script>
  <script src="../lib/jquery-validation/jquery.validate.min.js"></script>
  <script src="../lib/jquery.form.min.js"></script>
  <script src="../lib/bootstrap/bootstrap.bundle.min.js"></script>
  <script src="js/main.js"></script>
</body>
</html>