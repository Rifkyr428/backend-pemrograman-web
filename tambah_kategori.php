<?php

include 'koneksi.php';

// Ambil data JSON dari frontend
$data = json_decode(file_get_contents("php://input"));

// Ambil input nama kategori
$nama = $data->nama_kategori;

// Validasi input
if ($nama == "") {
    echo json_encode([
        "status" => "error",
        "message" => "Nama kosong"
    ]);
    exit;
}

// Query insert
$query = "INSERT INTO kategori (nama_kategori) VALUES ('$nama')";

// Eksekusi
mysqli_query($conn, $query);

// Response sukses
echo json_encode(["status" => "success"]);

?>