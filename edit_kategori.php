<?php

include 'koneksi.php';

// Ambil data JSON
$data = json_decode(file_get_contents("php://input"));

// Ambil id & nama baru
$id = $data->id;
$nama = $data->nama_kategori;

// Validasi
if ($nama == "") {
    echo json_encode(["status" => "error"]);
    exit;
}

// Query update
$query = "UPDATE kategori SET nama_kategori='$nama' WHERE id='$id'";

// Eksekusi
mysqli_query($conn, $query);

// Response
echo json_encode(["status" => "updated"]);

?>