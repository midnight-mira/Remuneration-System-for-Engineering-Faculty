<?php
include('../config/connection.php');
session_start();

$conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD) ;

if ($conn == true) {
    "connected successfully";
}


if (isset($_POST['user_login'])) {
    echo "form submitted";

    $email = $_POST['email'];
    $pass = $_POST['pass'];

    //select database
    $db_select = mysqli_select_db($conn, DB_NAME);
    //check whether this is connected or not

    if ($db_select == true) {
        echo "database Selected";
    }

    //fetching data from sql
    $query= "SELECT * FROM login_table WHERE email= ? AND pass= ?";
    $login = mysqli_prepare($conn, $query);
    $login->bind_param("ss" , $email, $pass);
    $login->execute();
    $result = $login->get_result();


    //checking whether the data matches or not
    $rows = mysqli_num_rows($result);
    if ($rows == 1) {
        $_SESSION['login_user'] = $email;
        header('location:normal.php');
    } else {
        $_SESSION['fail_login'] = "Wrong Credentials, Try Again!";
        header('location: index.php');
    
    }
}


if (isset($_POST['admin_login'])) {
    echo "form submitted";

    $email = $_POST['email'];
    $pass = $_POST['pass'];

    //select database
    $db_select = mysqli_select_db($conn, DB_NAME);
    //check whether this is connected or not

    if ($db_select == true) {
        echo "database Selected";
    }

    //fetching data from sql
    $query= "SELECT * FROM admin_login WHERE admin_email= ? AND admin_pass= ?";
    $login = mysqli_prepare($conn, $query);
    $login->bind_param("ss" , $email, $pass);
    $login->execute();
    $result = $login->get_result();


    //checking whether the data matches or not
    $rows = mysqli_num_rows($result);
    if ($rows == 1) {
        $_SESSION['login_admin'] = $email;
        header('location:admin_dashboard.php');
    } else {
        $_SESSION['fail_login'] = "Wrong Credentials, Try Again!";
        header('location:index.php');
    }
}


?>

