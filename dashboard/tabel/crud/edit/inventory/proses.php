<?php
if (isset($_POST['update'])) {
    $id_inventory = $_POST['id_inventory'];
    $nama_barang = $_POST['nama_barang'];
    $serial_number = $_POST['serial_number'];
    $jenis_barang = $_POST['jenis_barang'];
    $kuantitas_stok = $_POST['kuantitas_stok'];
    $lokasi_gudang = $_POST['lokasi_gudang'];

    include "koneksi.php";

    // Prepare the update statement
    $stmt = $koneksi->prepare("UPDATE inventory SET nama_barang = ?, serial_number = ?, jenis_barang = ?, kuantitas_stok = ?, id_gudang = ? WHERE id_inventory = ?");

    if ($stmt === false) {
        die("Prepare failed: " . $koneksi->error);
    }

    // Bind the parameters
    $stmt->bind_param("sissii", $nama_barang, $serial_number, $jenis_barang, $kuantitas_stok, $lokasi_gudang, $id_inventory);

    // Execute the update
    if ($stmt->execute()) {
        header("Location: ../../../../index.php");
        exit();
    } else {
        echo "<script>alert('Failed to update inventory');</script>";
    }

    $stmt->close();
    $koneksi->close();
}





// if($_POST){
//     $id_inventory = $_POST['id_inventory']; 
//     $nama_barang = $_POST['nama_barang']; 
//     $serial_number = $_POST['serial_number']; 
//     $jenis_barang = $_POST['jenis_barang']; 
//     $kuantitas_stok = $_POST['kuantitas_stok']; 
//     $lokasi_gudang = $_POST['lokasi_gudang']; 

//     if(empty($nama_barang)){ 
//         echo "<script>alert('Nama barang tidak boleh kosong');location.href='edit_inventory.php';</script>"; 
//     } elseif(empty($serial_number)){ 
//         echo "<script>alert('Serial number tidak boleh kosong');location.href='edit_inventory.php';</script>"; 
//     } else { 
//         include "koneksi.php"; 

//         // Perform the update operation without changing the location
//         if(empty($lokasi_gudang)){ 
//             $update = mysqli_query($koneksi, "UPDATE inventory SET 
//                 nama_barang = '".$nama_barang."', 
//                 serial_number = '".$serial_number."', 
//                 jenis_barang = '".$jenis_barang."', 
//                 kuantitas_stok = '".$kuantitas_stok."' 
//                 WHERE id_inventory = '".$id_inventory."'") or die(mysqli_error($koneksi)); 

//             if($update){ 
//                 echo "<script>alert('Sukses update inventory');location.href='tampil_inventory.php';</script>"; 
//             } else { 
//                 echo "<script>alert('Gagal update inventory');location.href='ubah_inventory.php?id_inventory=".$id_inventory."';</script>"; 
//             } 
//         } else { 
//             // Perform the update operation with all attributes, including location
//             $update = mysqli_query($koneksi, "UPDATE inventory SET 
//                 nama_barang = '".$nama_barang."', 
//                 serial_number = '".$serial_number."', 
//                 jenis_barang = '".$jenis_barang."', 
//                 kuantitas_stok = '".$kuantitas_stok."', 
//                 id_gudang = '".$lokasi_gudang."' 
//                 WHERE id_inventory = '".$id_inventory."'") or die(mysqli_error($koneksi)); 

//             if($update){ 
//                 echo "<script>alert('Sukses update inventory');location.href='tampil_inventory.php';</script>"; 
//             } else { 
//                 echo "<script>alert('Gagal update inventory');location.href='ubah_inventory.php?id_inventory=".$id_inventory."';</script>"; 
//             } 
//         }
//     }
// }
?>
