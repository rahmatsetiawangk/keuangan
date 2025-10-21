<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "INSERT INTO keuangan_users (username, password) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $username, $password);

    if ($stmt->execute()) {
        echo "<script>
            alert('Data berhasil ditambahkan!');
            window.location.href='index.php';
        </script>";
    } else {
        echo "Gagal menambahkan data: " . $conn->error;
    }

    $stmt->close();
    $conn->close();
}
?>
