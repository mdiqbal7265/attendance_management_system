<?php

$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "db_attendance";

$conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);

if(mysqli_errno($conn))
{
    die("Database cannot connect");
}

?>