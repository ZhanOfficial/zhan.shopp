<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "nebula_db";

$conn = new mysqli($host,$user,$pass,$db);
if($conn->connect_error){
    die("Database error");
}
?>
