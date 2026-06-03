<?php

$host = "localhost";
$user = "root";
$pass = "";
$db   = "pos_barang";

echo "<h2>INSTALL POS BARANG</h2>";

$conn = mysqli_connect($host, $user, $pass);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

echo "Koneksi MySQL berhasil <br>";

$sql_db = "CREATE DATABASE IF NOT EXISTS $db";

if (mysqli_query($conn, $sql_db)) {
    echo "Database '$db' siap <br>";
} else {
    die("Gagal buat database: " . mysqli_error($conn));
}

mysqli_select_db($conn, $db);

$sql_barang = "CREATE TABLE IF NOT EXISTS barang (
    id INT AUTO_INCREMENT PRIMARY KEY,
    kode_barang VARCHAR(50) NOT NULL,
    nama_barang VARCHAR(100) NOT NULL,
    harga INT NOT NULL,
    stok INT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

if (mysqli_query($conn, $sql_barang)) {
    echo "Tabel barang siap <br>";
} else {
    die("Gagal buat tabel barang: " . mysqli_error($conn));
}

echo "<br><b>INSTALL SELESAI</b><br>";
echo "<a href='index.php'>Masuk ke Aplikasi</a>";

?>