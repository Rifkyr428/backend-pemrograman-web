<?php

// Mengizinkan akses dari semua domain (CORS)
// Agar frontend React bisa mengakses backend PHP
header("Access-Control-Allow-Origin: *");

// Mengizinkan pengiriman data dalam bentuk JSON
header("Access-Control-Allow-Headers: Content-Type");

// 🔌 Koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "db_pemrograman_web");

// Cek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

?>