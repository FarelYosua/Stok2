<?php
if (isset($_POST['simpan'])) {
    $id_vendor = $_POST['id_vendor'];
    $nama_vendor = $_POST['nama_vendor'];
    $kontak = $_POST['kontak'];
    $nama_barang = $_POST['nama_barang'];
    $serial_number = $_POST['serial_number'];

    include "koneksi.php";

    $stmt = $koneksi->prepare("INSERT INTO vendor (id_vendor, nama_vendor, kontak, nama_barang, serial_number) VALUES (?, ?, ?, ?, ?)");

    if ($stmt === false) {
        die("Prepare failed: " . $koneksi->error);
    }

    $stmt->bind_param("isssi", $id_vendor, $nama_vendor, $kontak, $nama_barang, $serial_number);

    if ($stmt->execute()) {
        echo "<script>alert('Sukses menambah ruang');location.href='index.php';</script>";
    } else {
        echo "<script>alert('Gagal menambah ruang');location.href='index.php';</script>"; 
    }

    $stmt->close();
    $koneksi->close();
}
?>