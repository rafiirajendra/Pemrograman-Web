<?php
$servername = "RAFI";
$database = "Cihuy";
$username = "";
$password = "";

// Membuat koneksi menggunakan PDO
$koneksi = new PDO("sqlsrv:server=$servername;database=$database", $username, $password);
if (!$koneksi) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}
