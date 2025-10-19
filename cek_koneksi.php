<?php
// Panggil file koneksi
require_once "db.php";

// Tes koneksi
if ($conn->connect_error) {
    die("<h3 style='color:red;'>Koneksi ke database GAGAL ❌</h3><p>Error: " . $conn->connect_error . "</p>");
} else {
    echo "<h3 style='color:green;'>Koneksi ke database BERHASIL ✅</h3>";
    echo "<p>Server: " . htmlspecialchars($servername) . "</p>";
    echo "<p>Database: " . htmlspecialchars($db_name) . "</p>";
}

// Tutup koneksi setelah pengecekan
$conn->close();
?>
