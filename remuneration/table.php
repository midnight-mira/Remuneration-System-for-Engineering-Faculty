<?php

// includes the connection file.
include('../config/connection.php');
include('../config/authUser.php');
//session_start();

$Semester = $_SESSION["Semester"];

$conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD);
$db_select = mysqli_select_db($conn, DB_NAME);
$schemeSem = $_SESSION["scheme_sem"];
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

  *{
    text-align: center;}

    .table{
      margin: 10px;
    }
</style>
<body>

  <img src="lr.png" class="img-responsive center-block d-block mx-auto" alt="Sample Image">
  <section class="vh-100">
  <table class="table">
      <thead>
        <tr>
         <th class="th-lg">SEM</th>
         <th class="th-lg">Sr no.</th>
         <th class="th-lg">Name of Subject</th>
         <th class="th-lg">Subject Abbravation</th>
         <th class="th-lg">Subject Code</th>
         <th class="th-lg">No. of Student</th>
         <th class="th-lg">IAE</th>
         <th class="th-lg">TW Marks</th>
         <th class="th-lg">TW (Int.) Rs.</th>
         <th class="th-lg">OR/PR/PR+OR1</th>
         <th class="th-lg">OR/PR/PR+OR</th>
         <th class="th-lg">ORAL</th>
         <th class="th-lg">TA EXTERNAL</th> 
         <th class="th-lg">Days Of Extension</th> 
         <th class="th-lg">EXTERNAL(Rs)</th>
         <th class="th-lg">LAB ASSISTANT</th>
         <th class="th-lg">PEON</th>
         <th class="th-lg">TOTAL (Rs.)</th>
        </tr>
        
  </thead>
      <tbody>
          <?php
      $query= "SELECT * from `$schemeSem`";
      $result= mysqli_query($conn, $query);
         while($rows=mysqli_fetch_assoc($result))
         {
        
      ?>
      <tbody>
        <tr>
        <tr> <td><?php echo $Semester; ?></td> 
		<td><?php echo $rows['srNo']; ?></td> 
		<td><?php echo $rows['nameOfSubject']; ?></td> 
		<td><?php echo $rows['subjectAbbr']; ?></td> 
         <td><?php echo $rows['subjectCode']; ?></td> 
         <td><?php echo $rows['students']; ?></td> 
         <td><?php echo $rows['IAE']; ?></td> 
        <td><?php echo $rows['twMarks']; ?></td> 
         <td><?php echo $rows['twRs']; ?></td> 
         <td><?php echo $rows['oralPrac']; ?></td> 
         <td><?php echo $rows['oralPracMark']; ?></td> 
         <td><?php echo $rows['oralpracRs']; ?></td> 
         <td><?php echo $rows['taExternal']; ?></td>
         <td><?php echo $rows['daysOfExtension']; ?></td> 
         <td><?php echo $rows['ExternalLab']; ?></td> 
         <td><?php echo $rows['labAss']; ?></td> 
         <td><?php echo $rows['peon']; ?></td> 
       <td><?php echo $rows['totalRs']; ?></td>
        </tr>
        <?php
     
      } 
      ?>
      </tbody>
    </table>
    <div class="col-md-12 text-center">
      <a class="btn btn-primary" href="index.php" id="btnCheck">Logout</a>
      <a class="btn btn-primary" href="excelConvert.php" id="btnCheck">Get Excel</a>
    
  </section>
</body>

</html>