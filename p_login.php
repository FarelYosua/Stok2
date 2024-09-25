<?php
include 'koneksi.php';

if (!$koneksi){
    die("koneksi gagal!".mysqli_connect_errno().mysqli_connect_error());
}

if (isset($_POST['login'])) {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    $data = mysqli_query($koneksi, "SELECT * FROM `admin` WHERE username='$username' AND password='$password'");


    if (mysqli_num_rows($data) > 0) {
        $ambildata = mysqli_fetch_assoc($data);
        $_SESSION['log'] = 'logged';
        $_SESSION['level'] = $ambildata['level'];
        if ($ambildata['level'] === 'admin') {
            header('Location:dashboard');
        } 
    } else {
        echo "Invalid username or password";
}
}


?>