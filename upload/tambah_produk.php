<?php
include 'koneksi.php';

// ambil data dari text 
$id_kategori = $_POST['id_kategori'];
$nama_produk = $_POST['nama_produk'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];
$deskripsi = $_POST['deskripsi'];

// upload file
$namafile = $_FILES['foto']['name'];
$path = $_FILES['foto']['tmp_name'];

$folder = "upload/";
$path = $folder . time(). "_" . $namafile;

move_uploaded_file ($tmp, $path);
// simpan ke database
mysqli_query($conn, "INSERT INTO produk
(id_kategori, nama_produk, harga, stok, deskripsi, foto)
 VALUES ('$id_kategori', '$nama_produk', '$harga', '$stok', '$deskripsi', '$path')");
echo json_encode(['status' => 'success']);
?>