<?php
$server = "localhost";
$username = "root";
$password = "";
$connect_mysqli = mysqli_connect($server, $username, $password);

$mysqli_db = mysqli_select_db($connect_mysqli, "test");
if(!$mysqli_db)
{
    die("Connection failed");
}
 else {
    echo "Current Database is selected";    
}


