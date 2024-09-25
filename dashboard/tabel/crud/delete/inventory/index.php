<?php
if (isset($_GET['id'])) {
    $id_inventory = $_GET['id'];

    $koneksi = mysqli_connect('localhost', 'root', '', 'db_stok2');
    if (!$koneksi) {
        die('Koneksi gagal: ' . mysqli_connect_error());
    }

    $stmt = $koneksi->prepare("DELETE FROM `inventory` WHERE `inventory`.`id_inventory` = ?");
    if ($stmt === false) {
        die("Prepare failed: " . $koneksi->error);
    }

    $stmt->bind_param("i", $id_inventory);

    if ($stmt->execute()) {
        // Jika berhasil, redirect ke file index.php di folder lebih tinggi
        header("Location: ../../../../index.php");  // Path relatif
        exit(); // Menghentikan eksekusi script setelah redirect
    } else {
        echo "Hapus Gagal: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "ID Tidak Ditemukan";
}

?>
