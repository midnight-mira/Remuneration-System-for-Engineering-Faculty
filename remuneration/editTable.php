<?php

// includes the connection file.
include('../config/connection.php');
include('../config/authAdmin.php');


$conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD);
$db_select = mysqli_select_db($conn, DB_NAME);

$table_name = $_GET['table_name'];


$_SESSION['semTableName'] = $table_name;


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

</head>
<style>
  * {
    text-align: center;
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

<body>
  

  <img src="lr.png" class="img-responsive center-block d-block mx-auto" alt="Sample Image">
  <section class="vh-100">
    <table class="table">
      <thead>
        <tr>
          <th rowspan="2">SEM</th>
          <th rowspan="2">Sr no.</th>
          <th rowspan="2">Name of Subject</th>
          <th rowspan="2">Subject Abbravation</th>
          <th rowspan="2">Subject Code</th>
          <th rowspan="2">Category</th>
          <th rowspan="2"></th>
          <th rowspan="2"></th>


        </tr>

      </thead>
      <tbody>
        <?php
        $query = "SELECT * from `$table_name`";
        $result = mysqli_query($conn, $query);
        while ($rows = mysqli_fetch_assoc($result)) {

        ?>
      <tbody>
        <tr>
        <tr>
          <td><?php echo "SEM3"; ?></td>
          <td><?php echo $rows['srNo']; ?></td>
          <td><?php echo $rows['nameOfSubject']; ?></td>
          <td><?php echo $rows['subjectAbbr']; ?></td>
          <td><?php echo $rows['subjectCode']; ?></td>
          <td><?php echo $rows['category']; ?></td>

          <td>
            <form action="change.php" method="POST">
              <button type="submit" name="change" class="btn btn-primary"><a href="change.php?idth=<?php echo $rows['srNo']; ?>">edit</a></button>
            </form>
          </td>


        <?php

        }
        ?>
        
      </tbody>
    </table>
    <div class="col-md-12 text-center">
      <a class="btn btn-primary" href="allTableView.php" id="btnCheck">Back</a>
      <a class="btn btn-primary" href="newRow.php" id="btnCheck">Add Row</a>
    </div>

   



  </section>
</body>

</html>