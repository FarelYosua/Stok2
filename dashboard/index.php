<?php
    include ('koneksi.php');
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stock Barang</title>
    <link rel="stylesheet" href="style_dashboard.css">
</head>
<body>
    <header >
        <h1>Halaman Stok Barang</h1>
    </header>
    <div class="navbar">
        <nav>
            <ul >
                <li>
                    <a class="nav-link" href="?tabel=inventory">Inventory</a>
                </li>
                <li>
                    <a class="nav-link" href="?tabel=Storage">Storage</a>
                </li>
                <li>
                    <a class="nav-link" href="?tabel=Vendor">Vendor</a>
                </li>
            </ul>
            <form class="form-inline" method="GET" action="">
                <input class="form-control" type="search" placeholder="Search" aria-label="Search" name="search">
                <button class="btn" type="submit">Search</button>
            </form>
        </nav>
    </div><br>
    <?php
        $search = isset($_GET['search']) ? $_GET['search'] : '';
        $inventory = mysqli_query($koneksi, "SELECT * FROM  inventory WHERE jenis_barang LIKE '%$search%' OR nama_barang LIKE '%$search%'");
        $tabel = isset($_GET['tabel']) ? $_GET['tabel'] : 'inventory';

        if ($tabel == 'inventory') {
            include 'tabel/inventory.php';
        } elseif ($tabel == 'Storage') {
            include 'tabel/storage.php';
        } elseif ($tabel == 'Vendor') {
            include 'tabel/vendor.php';
        }
    ?>

</body>
</html>