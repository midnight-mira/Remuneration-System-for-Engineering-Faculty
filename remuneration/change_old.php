<?php
include_once('../config/connection.php'); #include the connection page
session_start();
?>

<?php
$conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD);
$select_db = mysqli_select_db($conn, DB_NAME);

$id = $_GET['idth'];
echo $id;
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
                <h3 class="mb-5">Edit Information</h3>
                <form action="#" method="post">
               
                <div class="form-outline mb-2">
                  <label class="form-label">Subject Name</label><br>
          <input type="text" name="subject" placeholder="Subject Name" class="form-control form-control-lg" required>
          
        </div>
        <div class="form-outline mb-2"> <label class="form-label">Subject Abbrevation</label><br>
          <input type="text"  name="subjAbbr" placeholder="Subject Abbrevation" class="form-control form-control-lg" required><br>
        </div>
        <div class="form-outline mb-2"> <label class="form-label">Subject Code</label><br>
          <input type="text"  name="subjCode" placeholder="Subject Code" class="form-control form-control-lg" required><br>
        </div>

        <div class="form-outline mb-2 center">
            <select name="category" class="form-select">
              <option selected>Category</option>
              <option value="MATH">MATH</option>
              <option value="THEORY">THEORY</option>
              <option value="LAB">LAB</option>
              <option value="NoTWLAB">No Tw LAB</option>
              <option value="SKILLLAB">SKILL lAB</option>
              <option value="MPODD">Mini Poject Odd Sem</option>
            
            </select>
            </div> 
            <div class="field">
                  <input type="submit" class="btn btn-success" name="submit" value="Submit">
</div>   
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  </body>
</html>
 
<?php

$conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD);
$db_select = mysqli_select_db($conn, DB_NAME);
if ($db_select) {
    //echo "success";
}


if(isset($_POST['submit'])){
    $name = $_POST['subject'];
    $abbr = $_POST['subjAbbr'];
    $code =$_POST['subjCode'];

    $category = $_POST['category'];

    echo $category;

}

?>

