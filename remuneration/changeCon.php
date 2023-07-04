<?php

include('../config/connection.php');
session_start();

$conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD);
$db_select = mysqli_select_db($conn, DB_NAME);
if ($db_select) {
    //echo "success";
}


if(isset($_POST['submit'])){
    $_SESSION['id'] = $id;

echo $id;
// Displaying Selected Value

}
?>