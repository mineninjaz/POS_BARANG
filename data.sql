CREATE DATABASE pos_barang;

USE pos_barang;

CREATE TABLE barang (
    id INT AUTO_INCREMENT PRIMARY KEY,
    kode_barang VARCHAR(50),
    nama_barang VARCHAR(100),
    harga INT,
    stok INT
);