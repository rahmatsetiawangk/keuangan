<?php
include "db.php";

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE username = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
    if (password_verify($password, $user['password'])) {
        echo "Login berhasil! Selamat datang, " . htmlspecialchars($user['username']);
    } else {
        echo "Password salah!";
    }
} else {
    echo "User tidak ditemukan!";
}

$stmt->close();
$conn->close();
?>
