<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "project_sdit";

$conn =  mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die ("koneksi gagal : " . mysqli_connect_error());
}
?>