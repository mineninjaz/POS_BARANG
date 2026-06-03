<?php
include 'koneksi.php';

$id = $_GET['id'];
$data = mysqli_query($conn, "SELECT * FROM barang WHERE id=$id");
$row = mysqli_fetch_assoc($data);

if (isset($_POST['update'])) {
    $kode = $_POST['kode'];
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];

    mysqli_query($conn, "UPDATE barang SET
        kode_barang='$kode',
        nama_barang='$nama',
        harga='$harga',
        stok='$stok'
        WHERE id=$id
    ");

    header("Location: index.php");
}
?>

<h2>Edit Barang</h2>

<form method="POST">
    Kode Barang <br>
    <input type="text" name="kode" value="<?= $row['kode_barang']; ?>"><br>

    Nama Barang <br>
    <input type="text" name="nama" value="<?= $row['nama_barang']; ?>"><br>

    Harga <br>
    <input type="number" name="harga" value="<?= $row['harga']; ?>"><br>

    Stok <br>
    <input type="number" name="stok" value="<?= $row['stok']; ?>"><br><br>

    <button type="submit" name="update">Update</button>
</form>