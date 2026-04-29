<?php

// Hubungkan ke database
include 'koneksi.php';

// Query ambil semua data kategori
$query = "SELECT * FROM kategori ORDER BY id DESC";

// Eksekusi query
$result = mysqli_query($conn, $query);

// Siapkan array kosong
$data = [];

// Ambil data satu per satu
while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}

// Kirim data dalam bentuk JSON
echo json_encode($data);

?>