<?php
// Connect to the database
include "koneksi.php";

// Get the ID of the item to be updated, default to null if not set
$id_inventory = $_GET['id'] ?? null;

if ($id_inventory) {
    // Fetch the current data for the selected item
    $query = "SELECT * FROM inventory WHERE id_inventory = ?";
    $stmt = $koneksi->prepare($query);
    $stmt->bind_param("i", $id_inventory);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $inventory = $result->fetch_assoc(); // Get the data
    } else {
        die("Data not found for the given ID.");
    }

    $stmt->close();
} else {
    die("No ID provided for update.");
}

// Fetch the storage locations for the dropdown
$query = 'SELECT id_gudang, lokasi_gudang FROM storage';
$result = $koneksi->query($query);

if ($result === false) {
    die("Query failed: " . $koneksi->error);
}

$lokasi_gudang_options = [];
while ($row = $result->fetch_assoc()) {
    $lokasi_gudang_options[] = $row;
}

$result->free();
$koneksi->close();
?>