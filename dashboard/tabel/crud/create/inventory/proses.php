<?php
if (isset($_POST['simpan'])) {
    $nama_barang = $_POST['nama_barang'];
    $serial_number = $_POST['serial_number'];
    $jenis_barang = $_POST['jenis_barang'];
    $kuantitas_stok = $_POST['kuantitas_stok'];
    $lokasi_gudang = $_POST['lokasi_gudang'];

    include "koneksi.php";

    $stmt = $koneksi->prepare("INSERT INTO inventory (nama_barang, serial_number, jenis_barang, kuantitas_stok, id_gudang) VALUES (?, ?, ?, ?, ?)");

    if ($stmt === false) {
        die("Prepare failed: " . $koneksi->error);
    }

    // Pastikan parameter sesuai dengan tipe data di database
    $stmt->bind_param("sissi", $nama_barang, $serial_number, $jenis_barang, $kuantitas_stok, $lokasi_gudang);

    if ($stmt->execute()) {
        header("Location: http://localhost/stok2/dashboard/");
        exit();
    } else {
        echo "<script>alert('Gagal menambah inventory');http://localhost/stok2/dashboard/';</script>"; 
    }

    $stmt->close();
    $koneksi->close();
}
?>
