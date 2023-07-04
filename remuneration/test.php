<?php

include_once('../config/connection.php'); #include the connection page
session_start();

$conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD);
$select_db = mysqli_select_db($conn, DB_NAME);


$query_row = "SELECT * 
FROM `cost`;";
$query = mysqli_query($conn, $query_row);



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
</head>

<body>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">Cost</th>
                <th scope="col">Value</th>

            </tr>
        </thead>
        <tbody>
            <?php while ($rows = mysqli_fetch_assoc($query)) { ?>
                <form class="form-group" action="" method="post"></form>
                <tr>
                    <th scope="row">IAE(20)</th>
                    <td>
                        <div class="form-group">
                            <input type="text" name="IAE(20)" value="<?php echo $rows['IAE(20)']; ?>" class="form-control">
                        </div>
                    </td>
                </tr>

                <tr>
                    <th scope="row">TW(25)</th>
                    <td>
                        <div class="form-group">
                            <input type="text" name="TW(25)" value="<?php echo $rows['TW(25)']; ?>" class="form-control">
                        </div>
                    </td>

                </tr>

                <tr>
                    <th scope="row">TW(50)</th>

                    <td>

                        <div class="form-group">
                            <input type="text" name="TW(50)" value="<?php echo $rows['TW(50)']; ?>" class="form-control">
                        </div>

                    </td>

                </tr>

                <tr>
                    <th scope="row">OralPrac</th>

                    <td>

                        <div class="form-group">
                            <input type="text" name="OralPrac" value="<?php echo $rows['OralPrac']; ?>" class="form-control">
                        </div>

                    </td>
                    

                </tr>

                <tr>
                    <th scope="row">TAExternalLab</th>
                    <td>

                        <div class="form-group">
                            <input type="text" name="TAExternalLab" value="<?php echo $rows['TAExternalLab']; ?>" class="form-control">
                        </div>

                    </td>

                </tr>

                <tr>
                    <th scope="row">LabAssistant</th>
                    <td>

                        <div class="form-group">
                            <input type="text" name="LabAssistant" value="<?php echo $rows['LabAssistant']; ?>" class="form-control">
                        </div>

                    </td>

                </tr>

                <tr>
                    <th scope="row">Peon</th>
                    <td>

                        <div class="form-group">
                            <input type="text" name="Peon" value="<?php echo $rows['Peon']; ?>" class="form-control">
                        </div>

                    </td>

                </tr>

                <tr>
                    <th scope="row">MiniProjectTW(25)</th>
                    <td>

                        <div class="form-group">
                            <input type="text" name="MiniProjectTW(25)" value="<?php echo $rows['MiniProjectTW(25)']; ?>" class="form-control">
                        </div>

                    </td>

                </tr>

                <tr>
                    <th scope="row">MiniProjectTW(50)</th>
                    <td>

                        <div class="form-group">
                            <input type="text" name="MiniProjectTW(50)" value="<?php echo $rows['MiniProjectTW(50)']; ?>" class="form-control">
                        </div>

                    </td>

                </tr>

                <tr>
                    <th scope="row">Mini Project Oral(25)</th>
                    <td>

                        <div class="form-group">
                            <input type="text" name="MiniProjectOral(25)" value="<?php echo $rows['MiniProjectOral(25)']; ?>" class="form-control">
                        </div>

                    </td>

                </tr>

                <tr>
                    <th scope="row">Mini Project Oral(50)</th>
                    <td>

                        <div class="form-group">
                            <input type="text" name="MiniProjectOral(50)" value="<?php echo $rows['MiniProjectOral(50)']; ?>" class="form-control">
                        </div>

                    </td>

                </tr>

                <tr>
                    <th scope="row">TAExternalMp</th>
                    <td>

                        <div class="form-group">
                            <input type="text" name="TAExternalMp" value="<?php echo $rows['TAExternalMp']; ?>" class="form-control">
                        </div>

                    </td>

                </tr>

                <tr>
                    <th scope="row">LabAssistantMp</th>
                    <td>

                        <div class="form-group">
                            <input type="text" name="LabAssistantMp" value="<?php echo $rows['LabAssistantMp']; ?>" class="form-control">
                        </div>

                    </td>

                </tr>

                <tr>
                    <th scope="row">PeonMp</th>
                    <td>

                        <div class="form-group">
                            <input type="text" name="PeonMp" value="<?php echo $rows['PeonMp']; ?>" class="form-control">
                        </div>

                    </td>

                </tr>
        </tbody>
    <?php
            } ?>
    </table>
</body>

</html>