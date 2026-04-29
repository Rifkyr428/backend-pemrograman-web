<?php

include 'koneksi.php';

// Ambil data JSON
$data = json_decode(file_get_contents("php://input"));

// Ambil id
$id = $data->id;

// Query delete
$query = "DELETE FROM kategori WHERE id='$id'";

// Eksekusi
mysqli_query($conn, $query);

// Response
echo json_encode(["status" => "deleted"]);

?>