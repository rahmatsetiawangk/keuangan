<?php
$host = "7fsr2l.h.filess.io";
$user = "db1_rahmatsetiawan_armcardpot";
$pass = "p94b5bed426a509fc0cbf5c5fb7c2bdbd35e3100b";
$dbname = "db1_rahmatsetiawan_armcardpot";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
