<?php
$host = "sql109.infinityfree.com"; 
$user = "if0_40305773"; 
$password = "Czz4AtnryRNo"; 
$database = "if0_40305773_myproject_db"; 

$con = mysqli_connect($host, $user, $password, $database);

if (!$con) {
    die("Database Connection Failed: " . mysqli_connect_error());
}
?>
