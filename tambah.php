<?php
include 'koneksi.php';

if (isset($_POST['simpan'])) {
    $kode = $_POST['kode'];
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];

    mysqli_query($conn, "INSERT INTO barang 
    (kode_barang, nama_barang, harga, stok) 
    VALUES ('$kode','$nama','$harga','$stok')");

    header("Location: index.php");
}
?>

<h2>Tambah Barang</h2>

<form method="POST">
    Kode Barang <br>
    <input type="text" name="kode"><br>

    Nama Barang <br>
    <input type="text" name="nama"><br>

    Harga <br>
    <input type="number" name="harga"><br>

    Stok <br>
    <input type="number" name="stok"><br><br>

    <button type="submit" name="simpan">Simpan</button>
</form>