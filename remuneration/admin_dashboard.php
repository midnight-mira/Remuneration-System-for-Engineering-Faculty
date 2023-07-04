<?php
include('../config/connection.php');
include('../config/authAdmin.php');


?>

<!DOCTYPE html>
<html lang="en">
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
</head>
<body>

<?php
    
if(isset($_SESSION['updateMsg']))
{
    ?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Hey !</strong> <?= $_SESSION['updateMsg']; ?> 
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php 
    unset($_SESSION['updateMsg']);
} ?>


<section class="vh-100" style="background-color: #022058;">
<div class="container py-5 h-100">
  <div class="row d-flex justify-content-center align-items-center h-100">
    <div class="col-12 col-md-8 col-lg-6 col-xl-5">
      <div class="card shadow-2-strong" style="border-radius: 1rem;">
        <div class="card-body p-5 text-center">
          <h3 class="mb-5">Options</h3>

            <div>
            <a class="btn btn-primary" href="createSemTable.php" role="button">Create New Semester Table</a>
            </div>

            <br>

            <div>
            <a class="btn btn-primary" href="allTableView.php" role="button">Edit Existing Table</a>
            </div>

            <br>
<!--
            <div>
            <a class="btn btn-primary" href="editCost.php" role="button">Edit Cost</a>
            </div> -->

            

         
        </div>
      </div>
    </div>
  </div>
  
</section>




?>
    
</body>
</html>


