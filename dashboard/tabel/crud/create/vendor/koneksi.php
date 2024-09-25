<?php
    $db_host = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name="db_stok" ;
    $koneksi = mysqli_connect('localhost','root','','db_stok');

    if(!$koneksi){
        die ('koneksi gagal'. mysqli_connect_errno(). mysqli_connect_error());
    }
?>
