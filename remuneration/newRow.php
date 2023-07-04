<?php
include('../config/connection.php');
session_start();
$tableName= $_SESSION['semTableName'] ;


$conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD);
$select_db = mysqli_select_db($conn, DB_NAME);
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
    <title>Edit Sem Subjects</title>
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

        h3 {
            text-align: center;
        }
    </style>
</head>

<body>
    <img src="lr.png" class="img-responsive center-block d-block mx-auto" alt="Sample Image">
    <section class="vh-100 block">
        <h2>ENTER INFORMATION</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Subject Name</th>
                    <th scope="col">Subject Abbrevation</th>
                    <th scope="col">Subject Code</th>
                    <th scope="col">Category</th>
                    <th scope="col">Option </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <form action="" method="post">
                            <div class="form-group">
                                <input type="text" name="nameOfSubject" placeholder="Enter Name of Subject" class="form-control">
                            </div>
                    </td>
                    <td>
                        <div class="form-group">
                            <input type="text" name="subjectAbbr" placeholder="Enter Subject Abrreviation" class="form-control">
                        </div>
                    </td>
                    <td>
                        <div class="form-group">
                            <input type="text" name="subjectCode" placeholder="Enter Subject Code" class="form-control">
                        </div>

                    </td>

                    <td>
                        <div class="form-group">
                            <?php
                            $category_query = "SELECT * FROM category ";
                            $category_results = mysqli_query($conn, $category_query);



                            ?>
                            <select name="category" class="form-select">
                                <option selected>Category</option>
                                <?php while ($cat = mysqli_fetch_assoc($category_results)) { ?>
                                    <option value="<?php echo $cat['categoryName']; ?>"><?php echo $cat['categoryName'];
                                                                                    } ?></option>
                            </select>
                        </div>
                    </td>

                    <td>
                        <button type="submit" name="update" class="btn btn-success">SAVE CHANGES</button>
                    </td>

                    </form>

                </tr>


            </tbody>
        </table>

        <?php
        if (isset($_SESSION['rowExists'])) {
            echo $_SESSION['rowExists'];
            unset($_SESSION['rowExists']);
        }

        if (isset($_SESSION['RowAdded'])) {
            echo $_SESSION['RowAdded'];
            unset($_SESSION['RowAdded']);
        }

        ?>

        <br> <br>

        
    </section>
</body>

</html>

<?php
if (isset($_POST['update'])) {
    echo "form success";

    //select database
    $db_select = mysqli_select_db($conn, DB_NAME);
    //check whether this is connected or not

    if ($db_select == true) {
        echo "database Selected";
    }

    $name = $_POST['nameOfSubject'];
    $subAbbr = $_POST['subjectAbbr'];
    $subCode = $_POST['subjectCode'];
    $category = $_POST['category'];

    $rowExist = "SELECT * FROM `$tableName` WHERE nameOfSubject = '$name'";
    $result = mysqli_query($conn, $rowExist);
    $resultCount = mysqli_num_rows($result);

    if ($resultCount > 0) {
        $_SESSION['rowExists'] = "<h3>Row Already Exists</h3>";
        header('location: newRow.php');
    } else {
        $query = "INSERT INTO `$tableName` (nameOfSubject, subjectAbbr, subjectCode, category) VALUES (?, ?, ?, ?)";
        $stmt = mysqli_prepare($conn, $query);
        $stmt->bind_param("ssss", $name, $subAbbr, $subCode, $category);
        $stmt->execute();

        $_SESSION['RowAdded'] = "<h3>Row Added Sucessfully!!</h3>";
        header('location: newRow.php');
    }
}
?>