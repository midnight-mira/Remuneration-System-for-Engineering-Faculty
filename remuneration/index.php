<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
    crossorigin="anonymous"></script>

  <style>
    .field {
      float: left;
      margin-left: 25px;
    }
  </style>
</head>

<body>

  <img src="lr.png" class="img-responsive center-block d-block mx-auto" alt="Sample Image">
  <?php
      if(isset($_SESSION['fail_login']))
{
    ?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <?= $_SESSION['fail_login']; ?> 
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php 
    unset($_SESSION['fail_login']);
} ?>
  
  <section class="vh-100" style="background-color: #022058;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card shadow-2-strong" style="border-radius: 1rem;">
            <div class="card-body p-5 text-center">
              <h3 class="mb-5">Login</h3>
              <form action="login.php" method="post">

                <div class="form-outline mb-4">
                  <label class="form-label">Email Address</label><br>
                  <input type="text" name="email" placeholder="Email id" class="form-control form-control-lg" required>

                </div>

                <div class="form-outline mb-4"> 
                  <label class="form-label">Password</label><br>
                  <input type="password" name="pass" placeholder="password" class="form-control form-control-lg" required><br>
                </div>

                <div class="field">
                  <button class="btn btn-primary btn-lg" type="submit" name="admin_login">Admin Login</button>
                </div>

                <div class="field">
                  <button class="btn btn-primary btn-lg" type="submit" name="user_login">User Login</button>
                </div>

              </form>
            </div>
          </div>
        </div>
      </div>
      
  </section>
</body>

</html>
