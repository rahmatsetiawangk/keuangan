<?php
// URL koneksi MySQL
$url = "mysql://db1_rahmatsetiawan_armcardpot:94b5bed426a509fc0cbf5c5fb7c2bdbd35e3100b@7fsr2l.h.filess.io:3307/db1_rahmatsetiawan_armcardpot";

// Parsing URL
$parsed = parse_url($url);

$servername = $parsed["host"];
$username   = $parsed["user"];
$password   = $parsed["pass"];
$database   = ltrim($parsed["path"], "/");
$port       = $parsed["port"];

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $database, $port);

// Mengecek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
