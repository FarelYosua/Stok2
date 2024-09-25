<center>
<h2>Tabel Storage</h2>
<a href="/stok2/dashboard/tabel/crud/create/storage/index.php" class="tombol_create">
    <button style="margin-bottom: 20px; padding: 10px 20px; background-color: #16423c; color: white; border: none; border-radius: 5px; cursor: pointer;">
        Buat Gudang Baru
    </button>
</a>

<table>
    <tr>
        <th>ID Gudang</th>
        <th>Nama Gudang</th>
        <th>Lokasi Gudang</th>
        <th>Action</th>
    </tr>
    <?php
    include "koneksi.php";

    // Query to fetch data from 'storage' table
    $sql = "SELECT id_gudang, nama_gudang, lokasi_gudang FROM storage";
    $hasil = $koneksi->query($sql);

    if ($hasil === false) {
        echo "<tr><td colspan='4'>Error: " . $koneksi->error . "</td></tr>";
    } else {
        if ($hasil->num_rows > 0) {
            while ($row = $hasil->fetch_assoc()) {
                echo "<tr>";

                // ID Gudang
                echo "<td>" . $row["id_gudang"] . "</td>";

                // Nama Gudang
                echo "<td>" . $row["nama_gudang"] . "</td>";

                // Lokasi Gudang
                echo "<td>" . $row["lokasi_gudang"] . "</td>";

                // Action (Edit/Delete)
                echo "<td>";
                echo "<a href='/stok2/dashboard/tabel/crud/edit/storage/index.php?id=" . $row["id_gudang"] . "'>Edit</a> | ";
                echo "<a href='/stok2/dashboard/tabel/crud/delete/storage/index.php?id=" . $row["id_gudang"] . "'>Delete</a>";
                echo "</td>";

                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='4'>No storage found</td></tr>";
        }
    }

    $koneksi->close();
    ?>
</table>
</center>
