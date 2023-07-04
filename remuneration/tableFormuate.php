<?php

include('../config/connection.php');
include('../config/authUser.php');
//session_start();

$conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD);
$db_select = mysqli_select_db($conn, DB_NAME);
if ($db_select) {
    //echo "success";
}


if (isset($_POST['submit'])) {
    $Semester = $_POST['Semester'];  // Storing Selected Value In Variable
    $noOfStudents = $_POST['noOfStudents'];
    $noOfGroups = $_POST['noOfGroups'];
    $scheme = $_POST['scheme'];
    $daysOfExtLab = $_POST['daysOfExtLab'];
    $daysOfExtMp = $_POST['daysOfExtMp'];

    echo $noOfGroups;
    echo $noOfStudents;
    echo $scheme;
    // Displaying Selected Value
    $tableName = $scheme . "_" . $Semester;
    echo $tableName;

    // Select 1 from table_name will return false if the table does not exist.
    $queryTable = "select 1 from `$tableName` LIMIT 1";
    $val = mysqli_query($conn, $queryTable);

    if ($val !== FALSE) {
        $_SESSION["Semester"] = $Semester;
        $_SESSION["noOfStudents"] = $noOfStudents;
        $_SESSION["noOfGroups"] = $noOfGroups;

        $_SESSION["scheme_sem"] = $scheme . "_" . $Semester;
        $_SESSION["daysOfExtLab"] = $daysOfExtLab;
        $_SESSION["daysOfExtMp"] = $daysOfExtMp;
        header('location:formulateSql.php');
    } else {

        $_SESSION['tableNotMade'] = "Table Does Not Exist, Please Make one";
        header('location: normal.php');
        
        
    }
}
