<?php
include('../config/connection.php');
  session_start();
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
    .field{
        float :left;
        margin-left: 25px;
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
                <form action="#" method="post">
                <div class="form-outline mb-4 ">
                <select class="form-select" aria-label="Default select example">
                    <option selected>Year</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                  </select>
                  </div>
        <div class="form-outline mb-4 center">
            <select class="form-select">
              <option selected>Semester</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
            </select>
            </div>  
            <!-- <div class="form-outline mb-4 ">
                <select class="form-select" aria-label="Default select example">
                    <option selected>Number of Groups</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option> 
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
                    <option value="21">21</option>
                    <option value="22">22</option>
                    <option value="23">23</option>
                    
                    </select>
                  </div> -->
                  <div class="form-outline mb-4">
                    <label for="exampleFormControlInput1" class="form-label">Number of Student</label><br>
                    <input type="text" class="form-control" id="nos" placeholder="Total Number of Student" required>
            </div>
          <div class="field-center">
          <a href="modify.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Modify</a>
        </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>
</html>


