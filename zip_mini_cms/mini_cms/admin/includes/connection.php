<?php
//database connection
$host = "localhost";
$user = "root";
$password = "";
$database = "mini_cms";

$con = new mysqli($host, $user, $password, $database);
$con->set_charset("utf8");
if($con->connect_errno) {
    die('Can not connect to database: (' . $con->connect_errno . ')' . $con->connect_error);
    }
?>