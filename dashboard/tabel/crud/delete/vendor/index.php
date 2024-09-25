<?php
$koneksi = mysqli_connect('localhost', 'root', '', 'db_stok');

if (isset($_GET['id'])) {
    $id_gudang = $_GET['id'];

    $stmt = $koneksi->prepare("DELETE FROM vendor WHERE id_vendor = ?");
    if ($stmt === false) {
        die("Prepare failed: " . $koneksi->error);
    }

    $stmt->bind_param("i", $id_gudang);
    if ($stmt->execute()) {
        header("Location: /stok/dashboard/");
        exit(); 
    } else {
        echo "Hapus Gagal: " . $stmt->error;
    }
    $stmt->close();
} else {
    echo "ID Tidak Ditemukan";
}
?>
