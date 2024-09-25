<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Gudang</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="box">
            <div class="form-box">
                <header>Tambah Gudang</header>
                <form action="proses.php" method="post">
                    <div class="field">
                        <label for="nama_gudang">Nama Gudang:</label>
                        <div class="input">
                            <input type="text" name="nama_gudang" id="nama_gudang" class="form-control" required>
                        </div>
                    </div>
                    <div class="field">
                        <label for="lokasi_gudang">Lokasi Gudang:</label>
                        <div class="input">
                            <input type="text" name="lokasi_gudang" id="lokasi_gudang" class="form-control" required>
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
