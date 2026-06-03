<?php
$conn = mysqli_connect("localhost", "root", "", "pos_barang");

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>