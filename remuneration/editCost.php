<?php

include_once('../config/connection.php'); #include the connection page
session_start();

$conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD);
$select_db = mysqli_select_db($conn, DB_NAME);



$query = "SELECT * FROM cost";
$result = mysqli_query($conn, $query);





?>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <title>Edit Cost</title>
    <style>
        h2 {
            margin-left: 30px;
            margin-top: 10px;

        }

        .block {
            background-color: beige;
        }

        .table {
            margin: auto;
            width: 90% !important;
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <img src="lr.png" class="img-responsive center-block d-block mx-auto" alt="Sample Image">
    <section class="vh-100 block">
        <h2>EDIT INFORMATION</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Cost</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php
                while ($rows = mysqli_fetch_assoc($result)) {
                    //echo $rows['nameOfSubject'];
                    //echo $rows['subjectAbbr'];
                ?>
                    <tr>
                        <td>
                            <form action="" method="post">
                                <div class="form-group">
                                    <input type="text" name="cost" value="<?php echo $rows['IAE']; ?>" class="form-control">
                                </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <input type="text" name="subjectAbbr"  value="<?php echo $rows['subjectAbbr']; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <input type="text" name="subjectCode" value="<?php echo $rows['subjectCode']; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>

                        </td>
                        
                        <td>
                            <div class="form-group">
                                <?php 
                    $category_query = "SELECT * FROM category ";
                    $category_results = mysqli_query($conn, $category_query);
                   

                    
                    ?>
                                <select name="category" class="form-select">
                                    <option selected><?php echo $rows['category']; ?></option>
                                    <?php  while($cat = mysqli_fetch_assoc($category_results)){ ?>
                                    <option value="<?php echo $cat['categoryName'];?>"><?php echo $cat['categoryName']; } ?></option>
                                </select>
                            </div>
                        </td>


                    
                        <td>
                            <button type="submit" name="delete" class="btn btn-danger">DELETE</button>
                            <button type="submit" name="update" class="btn btn-success">SAVE CHANGES</button>  
                        </td>

                        </form>

                    <?php
                }
                    ?>
                    </tr>


            </tbody>
        </table>
    </section>
</body>

</html>