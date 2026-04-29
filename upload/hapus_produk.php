<?php
include 'koneksi.php';

$data = json_decode(file_get_contents("php://input"));
$id = $data -> id;

// Hapus Foto dari server
$query = mysqli_query($conn, "SELECT foto FROM produk WHERE id='$id'");
$data = mysqli_fetch_assoc($query);

if (file_exists($data['foto'])) {
    unlink($data['foto']);
}
// Hapus data 
mysqli_query($conn, "DELETE FROM produk WHERE id='$id'");
echo json_encode(["status"=>"deleted"]);
?>