<?php
include 'koneksi.php';

$query = mysqli_query($cann, "
SELECT produk.*, kategori.nama_kategori
FROM produk
LEFT JOIN kategori ON produk.id_kategori = kategori.id
ORDER BY produk.id DESC
");

$data = [];
while ($row = mysqli_fetch_assoc($query)) {
    $data[] = $row;
}
echo json_encode($data);
?>