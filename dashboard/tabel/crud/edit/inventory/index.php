<?php
include ('ambildata.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Inventory</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="box">
            <div class="form-box">
                <header>Edit Inventory</header>
                <form action="proses.php" method="post">
                    <!-- Include the hidden field to pass the item ID -->
                    <input type="hidden" name="id_inventory" value="<?= htmlspecialchars($inventory['id_inventory']) ?>">

                    <div class="field">
                        <label for="nama_barang">Nama Barang:</label>
                        <div class="input">
                            <input type="text" name="nama_barang" id="nama_barang" class="form-control" value="<?= htmlspecialchars($inventory['nama_barang']) ?>">
                        </div>
                    </div>
                    <div class="field">
                        <label for="serial_number">Serial Number:</label>
                        <div class="input">
                            <input type="text" name="serial_number" id="serial_number" class="form-control" value="<?= htmlspecialchars($inventory['serial_number']) ?>">
                        </div>
                    </div>
                    <div class="field">
                        <label for="jenis_barang">Jenis Barang:</label>
                        <div class="input">
                            <input type="text" name="jenis_barang" id="jenis_barang" class="form-control" value="<?= htmlspecialchars($inventory['jenis_barang']) ?>">
                        </div>
                    </div>
                    <div class="field">
                        <label for="kuantitas_stok">Kuantitas Stok:</label>
                        <div class="input">
                            <input type="text" name="kuantitas_stok" id="kuantitas_stok" class="form-control" value="<?= htmlspecialchars($inventory['kuantitas_stok']) ?>">
                        </div>
                    </div>
                    <div class="field">
                        <label for="lokasi_gudang">Lokasi Gudang:</label>
                        <div class="input">
                            <select name="lokasi_gudang" id="lokasi_gudang" class="form-control">
                                <?php foreach ($lokasi_gudang_options as $option) : ?>
                                    <option value="<?= htmlspecialchars($option['id_gudang']) ?>" <?= $inventory['id_gudang'] == $option['id_gudang'] ? 'selected' : '' ?>>
                                        <?= htmlspecialchars($option['lokasi_gudang']) ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>

                    <div class="field">
                        <input type="submit" name="update" value="Update" class="btn">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
