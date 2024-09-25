<?php
    $db_host = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name="db_stok2" ;
    $koneksi = mysqli_connect('localhost','root','','db_stok2');

    if(!$koneksi){
        die ('koneksi gagal'. mysqli_connect_errno(). mysqli_connect_error());
    }
?>