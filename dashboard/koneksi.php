<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "db_stok2";
$koneksi = mysqli_connect($servername, $username, $password, $database);

if (!$koneksi){
    die("koneksi gagal!".mysqli_connect_errno().mysqli_connect_error());
}
?>