<!--
Nama  : Rizqi Noor Barokah
Kelas : TI-2A
NIM   : 250202028 
-->

<?php
// koneksi.php - Koneksi PHP ke database db_perpustakaan

// Matikan exception bawaan PHP 8.1+ agar kesalahan dapat diperiksa dengan if
mysqli_report(MYSQLI_REPORT_OFF);

// Parameter koneksi
$host     = "localhost";
$username = "root";
$password = "";
$database = "db_perpustakaan";

// Membuat koneksi
$koneksi = mysqli_connect($host, $username, $password, $database);

// Memeriksa koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . htmlspecialchars(mysqli_connect_error()));
}

// Mengatur karakter agar huruf dan simbol tersimpan dengan benar
mysqli_set_charset($koneksi, "utf8mb4");
