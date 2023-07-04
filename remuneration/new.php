<?php

// includes the connection file.
include('../config/connection.php');
session_start();

$conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD);
$db_select = mysqli_select_db($conn, DB_NAME);

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
         <th rowspan="2">No. of Student</th>
         <th rowspan="2">IAE</th>
         <th rowspan="2">TW Marks</th>
         <th rowspan="2">TW (Int.) Rs.</th>
         <th rowspan="2">OR/PR/PR+OR1</th>
         <th rowspan="2">OR/PR/PR+OR</th>
         <th>ORAL</th>
         <th rowspan="2">TA EXTERNAL</th> 
         <th rowspan="2">EXTERNAL(Rs)</th>
         <th rowspan="2">LAB ASSISTANT</th>
         <th rowspan="2">PEON</th>
         <th rowspan="2">TOTAL (Rs.)</th>
        </tr>
        <TR>
            <th>Int. (Rs.)</th>
        </TR>
  </thead>
      <tbody>
          <?php
      $query= "SELECT * from `table1`";
      $result= mysqli_query($conn, $query);
         while($rows=mysqli_fetch_assoc($result))
         {
        
      ?>
      <tbody>
        <tr>
        <tr> <td><?php echo $rows['SEM']; ?></td> 
		<td><?php echo $rows['Sr_no.']; ?></td> 
		<td><?php echo $rows['Name_of_Subject']; ?></td> 
		<td><?php echo $rows['Subject_Abbravation']; ?></td> 
        <tr> <td><?php echo $rows['Subject_Code']; ?></td> 
        <tr> <td><?php echo $rows['No_of_Student']; ?></td> 
        <tr> <td><?php echo $rows['IAE']; ?></td> 
        <tr> <td><?php echo $rows['TW_Marks']; ?></td> 
        <tr> <td><?php echo $rows['TW_(Int.)_Rs']; ?></td> 
        <tr> <td><?php echo $rows['OR/PR/PR+OR1']; ?></td> 
        <tr> <td><?php echo $rows['OR/PR/PR+OR']; ?></td> 
        <tr> <td><?php echo $rows['ORAL']; ?></td> 
        <tr> <td><?php echo $rows['TA_EXTERNAL']; ?></td> 
        <tr> <td><?php echo $rows['EXTERNAL(Rs)']; ?></td> 
        <tr> <td><?php echo $rows['LAB_ASSISTANT']; ?></td> 
        <tr> <td><?php echo $rows['PEON']; ?></td> 
        <tr> <td><?php echo $rows['TOTAL_(Rs.)']; ?></td>
        </tr>
        <?php
     
      } 
      ?>
	<!-- 
        <tr>
            <td rowspan="10">
                <b>V</b></td>
                <td>1</td>
            <td>Theoretical Computer Science</td>
            <td>TCS</td>
            <td>CSC501</td>
            <td>69</td>
            <td>276</td>
            <td>25</td>
            <td>444</td>
            <td>NA</td>
            <td>NA</td>
            <td>NA</td>
            <td>NA</td>
            <td>NA</td>
            <td>NA</td>
            <td>NA</td>
            <td>276</td>
        </tr>
        <tr>
           <td>2</td>
         <td>Software Engineering</td>
          <td>SE</td>
          <td>CSC502</td>
          <td>69</td>
          <td>276</td>
          <td>25</td>
          <td>372</td>
          <td>NA</td>
          <td>NA</td>
          <td>NA</td>
          <td>NA</td>
          <td>NA</td>
          <td>NA</td>
          <td>NA</td>
          <td>690</td>
      </tr>
      <tr>
        <td>3</td>
           <td>Computer Network</td>
       <td>CN</td>
       <td>CSC503</td>
       <td>69</td>
       <td>276</td>
       <td>25</td>
       <td>372</td>
       <td>NA</td>
       <td>NA</td>
       <td>NA</td>
       <td>NA</td>
       <td>NA</td>
       <td>NA</td>
       <td>NA</td>
       <td>690</td>
   </tr>
   <tr>
    <td>4</td>
 <td>Data Warehousing & Mining</td> 
   <td>SE</td>
   <td>CSC504</td>
   <td>69</td>
   <td>276</td>
   <td>25</td>
   <td>372</td>
   <td>NA</td>
   <td>NA</td>
   <td>NA</td>
   <td>NA</td>
   <td>NA</td>
   <td>NA</td>
   <td>NA</td>
   <td>690</td>
</tr>
<tr>
  <td>5</td>
<td>Internet Programming</td>
 <td>IP</td>
 <td>CSDLO5012</td>
 <td>69</td>
 <td>276</td>
 <td>25</td>
 <td>372</td>
 <td>NA</td>
 <td>NA</td>
 <td>NA</td>
 <td>NA</td>
 <td>NA</td>
 <td>NA</td>
 <td>NA</td>
 <td>690</td>
</tr>
<tr>
  <td>6</td>
<td>Software Engineering Lab</td>
 <td>SEL</td>
 <td>CSL501</td>
 <td>69</td>
 <td>NA</td>
 <td>25</td>
 <td>372</td>
 <td>NA</td>
 <td>NA</td>
 <td>NA</td>
 <td>NA</td>
 <td>NA</td>
 <td>NA</td>
 <td>NA</td>
 <td>690</td>
</tr>
<tr>
  <td>7</td>
  <td>Computer Network Lab</td> 
 <td>CNL</td>
 <td>CSL502</td>
 <td>69</td>
 <td>NA</td>
 <td>25</td>
 <td>372</td>
 <td>NA</td>
 <td>NA</td>
 <td>NA</td>
 <td>NA</td>
 <td>NA</td>
 <td>NA</td>
 <td>NA</td>
 <td>690</td>
</tr>
<tr>
  <td>8</td>
<td>Data Warehousing & Mining Lab</td>
 <td>Data Warehousing & Mining Lab</td>
 <td>CSL503</td>
 <td>69</td>
 <td>NA</td>
 <td>25</td>
 <td>372</td>
 <td>NA</td>
 <td>NA</td>
 <td>NA</td>
 <td>NA</td>
 <td>NA</td>
 <td>NA</td>
 <td>NA</td>
 <td>690</td>
</tr>
<tr>
  <td>9</td>
 <td>Professional Comm. Ethics II</td>
 <td>PCE II</td>
 <td>CSL504</td>
 <td>69</td>
 <td>NA</td>
 <td>25</td>
 <td>372</td>
 <td>NA</td>
 <td>NA</td>
 <td>NA</td>
 <td>NA</td>
 <td>NA</td>
 <td>NA</td>
 <td>NA</td>
 <td>690</td>
</tr>
<tr>
  <td>10</td>
 <td>Mini Project 2A</td>
 <td>MP2A</td>
 <td>CSM501</td>
 <td>17 Groups</td>
 <td>NA</td>
 <td>25</td>
 <td>372</td>
 <td>NA</td>
 <td>NA</td>
 <td>NA</td>
 <td>NA</td>
 <td>NA</td>
 <td>NA</td>
 <td>NA</td>
 <td>690</td>
</tr>
     -->
      </tbody>
    </table>
    <div class="col-md-12 text-center">
      <a class="btn btn-primary" href="login.php" id="btnCheck">Home</a>
  </section>
</body>

</html>