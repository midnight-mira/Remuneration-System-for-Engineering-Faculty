<?php
// includes the connection file.
include('../config/connection.php');
session_start();

require_once '../Box/src/Spout/Autoloader/autoload.php';

//for creation of tables
$conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD);
$db_select = mysqli_select_db($conn, DB_NAME);
if ($db_select) {
  // echo "success";
}

use Box\Spout\Reader\Common\Creator\ReaderEntityFactory;