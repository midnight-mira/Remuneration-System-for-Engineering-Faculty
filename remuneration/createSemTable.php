<?php
include('../config/connection.php');
include('../config/authAdmin.php');

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
                            <form action="" method="post">

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
                                <div class="form-outline mb-4 ">
                                    <div class="form-outline mb-4">
                                        <label for="exampleFormControlInput1" class="form-label">Scheme</label><br>
                                        <input type="text" name="scheme" class="form-control" id="nos" placeholder="Eg. 2019 or 2024" required>
                                    </div>
                                    <div class="form-outline mb-4">
                                        <select name="dept" class="form-select" required>
                            
                                            <option value="cmpn">CMPN</option>
                                        </select>

                                    </div>
                                    <div class="form-outline mb-4">
                                        <input type="submit" class="btn btn-success" name="submit" value="Submit">
                                    </div>
                                    <?php

                                    if (isset($_SESSION['tableExist'])) {
                                        echo $_SESSION['tableExist'];
                                        unset($_SESSION['tableExist']);
                                    } ?>
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


if (isset($_POST['submit'])) {
    $sem = $_POST['Semester'];  // Storing Selected Value In Variable
    $scheme = $_POST['scheme'];
    $dept = $_POST['dept'];

    $tableName = $scheme . "_" . $sem;

    $query = "select 1 from `$tableName`";
    $exists = mysqli_query($conn, $query);

    if ($exists !== FALSE) {
        $_SESSION['tableExist'] = "Table Already Exists";
    } else {
        $_SESSION['newTableName'] = $tableName;
        $newTableQuery = "CREATE TABLE `$tableName` (
            `srNo` int(15) NOT NULL PRIMARY KEY AUTO_INCREMENT,
            `nameOfSubject` varchar(50) NOT NULL,
            `category` text NOT NULL,
            `subjectAbbr` varchar(10) NOT NULL,
            `subjectCode` varchar(15) NOT NULL,
            `students` int(250) DEFAULT NULL,
            `IAE` int(255) DEFAULT NULL,
            `twMarks` int(100) DEFAULT NULL,
            `twRs` int(11) DEFAULT NULL,
            `oralPrac` varchar(20) DEFAULT NULL,
            `oralPracMark` int(11) DEFAULT NULL,
            `oralpracRs` int(11) DEFAULT NULL,
            `taExternal` int(11) DEFAULT NULL,
            `ExternalLab` int(11) DEFAULT NULL,
            `labAss` int(11) DEFAULT NULL,
            `peon` int(11) DEFAULT NULL,
            `totalRs` int(11) NOT NULL,
            `daysOfExtension` int
          ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;";

        $newTable = mysqli_query($conn, $newTableQuery);
        header('location: addRowsNew.php');
    }
    // Displaying Selected Value

}



?>