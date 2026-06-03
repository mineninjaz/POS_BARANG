<?php include 'koneksi.php'; ?>

<h2>Data Barang</h2>
<a href="tambah.php">Tambah Barang</a>

<table border="1" cellpadding="10">
    <tr>
        <th>No</th>
        <th>Kode</th>
        <th>Nama</th>
        <th>Harga</th>
        <th>Stok</th>
        <th>Aksi</th>
    </tr>

<?php
$data = mysqli_query($conn, "SELECT * FROM barang");
$no = 1;

while ($row = mysqli_fetch_assoc($data)) {
?>
<tr>
    <td><?= $no++; ?></td>
    <td><?= $row['kode_barang']; ?></td>
    <td><?= $row['nama_barang']; ?></td>
    <td><?= $row['harga']; ?></td>
    <td><?= $row['stok']; ?></td>
    <td>
        <a href="edit.php?id=<?= $row['id']; ?>">Edit</a>
        <a href="hapus.php?id=<?= $row['id']; ?>">Hapus</a>
    </td>
</tr>
<?php } ?>
</table>