<?php 
// Membuat koneksi ke database PHP
$koneksi = mysqli_connect("localhost", "root", "", "if2a_mhs");

// Periksa koneksi
if (mysqli_connect_error()) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
echo "Koneksi berhasil!";
?>