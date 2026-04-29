<?php
include 'koneksi.php';

$id = $_POST['id'];
$id_kategori = $_POST['id_kategori'];
$nama_produk = $_POST['nama_produk'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];
$deskripsi = $_POST['deskripsi'];

if (!empty($_FILES['foto']['name'])) {
    $namafile = $_FILES['foto']['name'];
    $tmp = $_FILES['foto']['tmp_name'];
   
    $path = "upload/" . time() . "_" . $namafile;
    move_uploaded_file($tmp, $path);

    mysqli_query($conn, "UPDATE produk SET 
    id_kategori='$id_kategori', 
    nama_produk='$nama_produk', 
    harga='$harga', 
    stok='$stok', 
    deskripsi='$deskripsi', 
    foto='$path'
    WHERE id='$id'");
} else {
    mysqli_query($conn, "UPDATE produk SET 
    id_kategori='$id_kategori', 
    nama_produk='$nama_produk', 
    harga='$harga', 
    stok='$stok', 
    deskripsi='$deskripsi' 
    WHERE id='$id'
    ");
}

echo json_encode(['status' => 'updated']);
?>