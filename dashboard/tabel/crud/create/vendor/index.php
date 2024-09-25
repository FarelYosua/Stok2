<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Vendor</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="box">
            <div class="form-box">
                <header>Tambah Vendor</header>
                <form action="proses.php" method="post">
                    <div class="field">
                        <label for="id_vendor">ID Vendor:</label>
                        <div class="input">
                            <input type="text" name="id_vendor" id="id_vendor" class="form-control">
                        </div>
                    </div>
                    <div class="field">
                        <label for="nama_vendor">Nama vendor:</label>
                        <div class="input">
                            <input type="text" name="nama_vendor" id="nama_vendor" class="form-control">
                        </div>
                    </div>
                    <div class="field">
                        <label for="kontak">kontak:</label>
                        <div class="input">
                            <input type="text" name="kontak" id="kontak" class="form-control">
                        </div>
                    </div>
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
                        <input type="submit" name="simpan" value="Simpan" class="btn">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
