<?php

include_once('../config/connection.php'); #include the connection page
include('../config/authAdmin.php');
session_start();

$conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD);
$select_db = mysqli_select_db($conn, DB_NAME);

$srNo = $_SESSION['srNo'];
echo $srNo;

$table_name = $_SESSION['semTableName'];

if (isset($_POST['update'])) {
    echo "form success";

    //select database
    $db_select = mysqli_select_db($conn, DB_NAME);
    //check whether this is connected or not

    if ($db_select == true) {
        echo "database Selected";
    }

    $name= $_POST['nameOfSubject'];
    $subAbbr= $_POST['subjectAbbr'];
    $subCode = $_POST['subjectCode'];
    $category = $_POST['category'];


    $query = "UPDATE `$table_name` SET nameOfSubject = ?, subjectAbbr= ?,  subjectCode= ?, category =? WHERE srNo = ?";
    $stmt = mysqli_prepare($conn, $query);
    $stmt->bind_param("ssssi", $name, $subAbbr, $subCode, $category, $srNo);
    $stmt->execute();
    
    $_SESSION['updateMsg'] = "Sucessfully Updated"; 
    header('location: admin_dashboard.php');
}

if (isset($_POST['delete'])) {
    echo "form submitted";

    //select database
    $db_select = mysqli_select_db($conn, DB_NAME);
    //check whether this is connected or not

    if ($db_select == true) {
        echo "database Selected";
    }

    $query = "DELETE FROM `$table_name` WHERE srNo=?";
    $stmt = mysqli_prepare($conn, $query);
    $stmt->bind_param("s", $srNo);
    $stmt->execute();
    header('location: admin_dashboard.php');

}
