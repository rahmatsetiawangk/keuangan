<?php
$servername = "7fsr2l.h.filess.io";
$username = "db1_rahmatsetiawan_armcardpot"; // ganti jika perlu
$password = "p94b5bed426a509fc0cbf5c5fb7c2bdbd35e3100b"; // ganti jika punya password
$database = "db1_rahmatsetiawan_armcardpot"; // ganti dengan nama database kamu

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
