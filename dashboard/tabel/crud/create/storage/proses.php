<?php
if (isset($_POST['simpan'])) {
    // Get form data
    $nama_gudang = $_POST['nama_gudang'];
    $lokasi_gudang = $_POST['lokasi_gudang'];

    // Connect to the database
    include "koneksi.php";

    // Prepare SQL statement to insert the new storage
    $stmt = $koneksi->prepare("INSERT INTO storage (nama_gudang, lokasi_gudang) VALUES (?, ?)");

    if ($stmt === false) {
        die("Prepare failed: " . $koneksi->error);
    }

    // Bind parameters (ss for two strings)
    $stmt->bind_param("ss", $nama_gudang, $lokasi_gudang);

    // Execute the query and check if it was successful
    if ($stmt->execute()) {
        header("Location: http://localhost/stok2/dashboard/");
        exit();
    } else {
        echo "<script>alert('Gagal menambah gudang');</script>";
    }

    // Close the statement and connection
    $stmt->close();
    $koneksi->close();
}
?>
