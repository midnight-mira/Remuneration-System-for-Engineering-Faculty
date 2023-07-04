<?php
include('../config/connection.php');
include('../config/authAdmin.php');



$conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD) or die($mysqli_error());

if ($conn == true) {
   //echo "connected successfully";
}

$db_select = mysqli_select_db($conn, DB_NAME);
//check whether this is connected or not

if ($db_select == true) {
    //echo "database Selected";
}

$schema = "%sem%";
$query = "SELECT TABLE_NAME FROM INFORMATION_SCHEMA.TABLES 
WHERE TABLE_NAME LIKE ?
AND TABLE_SCHEMA = 'remuneration'; ";
$stmt = mysqli_prepare($conn, $query);
$stmt->bind_param("s", $schema);
$stmt->execute();
$result = $stmt->get_result();


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sem table List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .table {
            margin: auto;
            width: 70% !important;
            text-align: center;
        }

        h2 {
            text-align: center;
            margin-top: 20px;
        }

        a {
            color: inherit;
            text-decoration: none;
        }

        a:hover {
            color: inherit;
            text-decoration: none;
            cursor: pointer;
        }
    </style>


</head>

<body>
    <h2>Edit Semester Table</h2>

    <br>

    <table class="table table-bordered center">
        <thead class="thead-dark">
            <tr>
                <th scope="col">SEMESTER</th>
               

            </tr>
        </thead>
        <tbody>
            <?php while ($rows = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <td>
                        <form action="editTable.php" method="POST">
                            <button type="button" name="change" class="btn btn-success"><a href="editTable.php?table_name=<?php echo $rows['TABLE_NAME']; ?>"><?php echo $rows['TABLE_NAME']; ?></a></button>
                        </form>
                    </td>
                <?php } ?>

                </tr>
        </tbody>
    </table>
</body>

</html>