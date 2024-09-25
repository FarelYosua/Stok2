<center>
<h2>Tabel Inventory</h2>
    <a href="/stok2/dashboard/tabel/crud/create/inventory/index.php" class="tombol_create">
        <button style="margin-bottom: 20px; padding: 10px 20px; background-color: #16423c; color: white; border: none; border-radius: 5px; cursor: pointer;">
            Buat Inventory Baru
        </button>
    </a>
    <table>
        <tr>
            <th>Nama Barang</th>
            <th>Serial Number</th>
            <th>Jenis Barang</th>
            <th>Kuantitas Stok</th>
            <th>Lokasi Gudang</th>
            <th>Action</th>
        </tr>
        <?php
            $sql = "SELECT i.id_inventory, i.nama_barang, i.serial_number, i.jenis_barang, i.kuantitas_stok, s.nama_gudang, s.lokasi_gudang 
            FROM inventory i
            INNER JOIN storage s ON i.id_gudang = s.id_gudang;";    

            $hasil = $koneksi->query($sql);

            if ($hasil === false) {
                echo "<tr><td colspan='6'>Error: " . $koneksi->error . "</td></tr>";
            } else {
                if ($hasil->num_rows > 0) {
                    while($row = $hasil->fetch_assoc()) {
                        // Cek apakah kuantitas stok habis (0)
                        echo "<tr>";

                        // Nama Barang
                        echo "<td>" . $row["nama_barang"] . "</td>";

                        // Serial Number
                        echo "<td>" . $row["serial_number"] . "</td>";

                        // Jenis Barang
                        echo "<td>" . $row["jenis_barang"] . "</td>";

                        // Cek stok kosong dan warnai sel jika stok habis
                        if ($row["kuantitas_stok"] == 0) {
                            echo "<td style='background-color: red; color: white;'>" . $row["kuantitas_stok"] . "</td>";
                        } else {
                            echo "<td>" . $row["kuantitas_stok"] . "</td>";
                        }

                        // Lokasi Gudang
                        echo "<td>" . $row["lokasi_gudang"] . "</td>";

                        // Action (Edit/Delete)
                        echo "<td>";
                        echo "<a href='/stok2/dashboard/tabel/crud/edit/inventory/index.php?id=" . $row["id_inventory"] .  "'>Edit</a> | "; 
                        echo "<a href='/stok2/dashboard/tabel/crud/delete/inventory/index.php?id=" . $row["id_inventory"] . "'>Delete</a>";
                        echo "</td>";
                        
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='6'>No items found</td></tr>";
                }
            }
        ?>
    </table>
</center>
