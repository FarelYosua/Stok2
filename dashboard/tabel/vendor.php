<center>
<h2>Tabel Vendor</h2>
    <a href="/stok/dashboard/tabel/crud/create/vendor/index.php" class="tombol_create">
        <button style="margin-bottom: 20px; padding: 10px 20px; background-color: #16423c; color: white; border: none; border-radius: 5px; cursor: pointer;">
            Buat Vendor Baru
        </button>
    </a>
    <table>
        <tr>
            <th>ID Vendor</th>
            <th>Nama Vendor</th>
            <th>Kontak</th>
            <th>Nama Barang</th>
            <th>ID Inventory</th>
            <th>Action</th>
        </tr>
        <tr>
        <?php
                $sql = "SELECT `id_vendor`, `nama_vendor`,`kontak`,`nama_barang`,`id_inventory` FROM `vendor`";
                $hasil = $koneksi->query($sql);

                if ($hasil === false) {
                    echo "<tr><td colspan='6'>Error: " . $koneksi->error . "</td></tr>";
                } else {
                    if ($hasil->num_rows > 0) {
                        while($row = $hasil->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $row["id_vendor"] . "</td>";
                            echo "<td>" . $row["nama_vendor"] . "</td>";
                            echo "<td>" . $row["kontak"] . "</td>";
                            echo "<td>" . $row["nama_barang"] . "</td>";
                            echo "<td>" . $row["id_inventory"] . "</td>";
                            echo "<td>";
                            echo "<a href='edit.php?id=" . $row["id_inventory"] .  "'>Edit</a> | ";
                            echo "<a href='/stok/dashboard/tabel/crud/delete/vendor/index.php?id=" . $row["id_vendor"] . "'>Delete</a>";
                            echo "</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='6'>No users found</td></tr>";
                    }
                }
            ?>
        </tr>
    </table>
    </center>