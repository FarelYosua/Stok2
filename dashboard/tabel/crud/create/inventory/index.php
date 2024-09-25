<?php
// Ambil data dari database untuk dropdown
include "koneksi.php";

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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Inventory</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="box">
            <div class="form-box">
                <header>Tambah Inventory</header>
                <form action="proses.php" method="post">
                    <div class="field">
                        <label for="nama_barang">Nama Barang:</label>
                        <div class="input">
                            <input type="text" name="nama_barang" id="nama_barang" class="form-control">
                        </div>
                    </div>
                    <div class="field">
                        <label for="serial_number">Serial Number:</label>
                        <div class="input">
                            <input type="text" name="serial_number" id="serial_number" class="form-control">
                        </div>
                    </div>
                    <div class="field">
                        <label for="jenis_barang">Jenis Barang:</label>
                        <div class="input">
                            <input type="text" name="jenis_barang" id="jenis_barang" class="form-control">
                        </div>
                    </div>
                    <div class="field">
                        <label for="kuantitas_stok">Kuantitas Stok:</label>
                        <div class="input">
                            <input type="text" name="kuantitas_stok" id="kuantitas_stok" class="form-control">
                        </div>
                    </div>
                    <div class="field">
                        <label for="lokasi_gudang">Lokasi Gudang:</label>
                        <div class="input">
                            <select name="lokasi_gudang" id="lokasi_gudang" class="form-control">
                                <?php foreach ($lokasi_gudang_options as $option) : ?>
                                    <option value="<?= htmlspecialchars($option['id_gudang']); ?>">
                                        <?= htmlspecialchars($option['lokasi_gudang']); ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    
                    <div class="field">
                        <input type="submit" name="simpan" value="Simpan" class="btn">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>