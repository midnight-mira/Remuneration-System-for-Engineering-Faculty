<?php
include('../config/connection.php');
include('../config/authUser.php');
//session_start();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

  <style>
    .field {
      float: left;
      margin-left: 25px;
    }

    .error {
      text-align: center;
    }
  </style>
</head>

<body>

  <img src="lr.png" class="img-responsive center-block d-block mx-auto" alt="Sample Image">
  <section class="vh-100" style="background-color: #022058;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card shadow-2-strong" style="border-radius: 1rem;">
            <div class="card-body p-5 text-center">
              <h3 class="mb-5">Enter Detail</h3>
              <form action="tableFormuate.php" method="post">

                <div class="form-outline mb-4 center">
                  <select name="Semester" class="form-select" required>

                    <option value="sem3">sem3</option>
                    <option value="sem4">sem4</option>
                    <option value="sem5">sem5</option>
                    <option value="sem6">sem6</option>
                    <option value="sem7">sem7</option>
                    <option value="sem8">sem8</option>
                  </select>
                </div>

                
                <div class="form-outline mb-4">
                  <label for="exampleFormControlInput1" class="form-label">Scheme</label><br>
                  <input type="text" name="scheme" class="form-control" id="nos" placeholder="Eg. 2019 or 2024" required>
                </div>

<!---
                  <label class="form-label">Scheme</label><br>
                  <select name="scheme" class="form-select">
                    <option selected>Scheme</option>
                    <option value="2019">2019</option>
                    <option value="2024">2016</option>

                  </select>
                </div> -->

                <div class="form-outline mb-4 ">
                  <div class="form-outline mb-4">
                    <label class="form-label">Number of Groups</label><br>
                    <input type="text" name="noOfGroups" class="form-control" id="nos" placeholder="Total Number of Groups" required>


                  </div>
                </div>
                <div class="form-outline mb-4">
                  <label for="exampleFormControlInput1" class="form-label">Number of Student</label><br>
                  <input type="text" name="noOfStudents" class="form-control" id="nos" placeholder="Total Number of Student" required>
                </div>

                <div class="form-outline mb-4">
                  <label for="exampleFormControlInput1" class="form-label">Days Of Extension Lab</label><br>
                  <input type="text" name="daysOfExtLab" class="form-control" id="nos" placeholder="Days Of Extension Lab (integer)" required>
                </div>

                <div class="form-outline mb-4">
                  <label for="exampleFormControlInput1" class="form-label">Days Of Extension Mini Project</label><br>
                  <input type="text" name="daysOfExtMp" class="form-control" id="nos" placeholder="Days Of Extension Mini Project (integer)" required>
                </div>

                <div class="field">
                  <input type="submit" class="btn btn-success" name="submit" value="Submit">
                </div>
              </form>
              <br>
        
            </div>
            <div class="error">
                <?php

                if (isset($_SESSION['tableNotMade'])) {
                  echo $_SESSION['tableNotMade'];
                  unset($_SESSION['tableNotMade']);
                } ?>
              </div>

          </div>
        </div>
      </div>
  </section>
</body>

</html>