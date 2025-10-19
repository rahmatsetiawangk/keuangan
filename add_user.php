<?php
include "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $username, $password);

    if ($stmt->execute()) {
        echo "User berhasil ditambahkan! <a href='index.html'>Kembali ke Login</a>";
    } else {
        echo "Gagal menambah user: " . $conn->error;
    }

    $stmt->close();
    $conn->close();
} else {
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Tambah User</title>
  <style>
    body {font-family: Arial; background: #f9f9f9; display: flex; justify-content: center; align-items: center; height: 100vh;}
    form {background: #fff; padding: 30px; border-radius: 10px; box-shadow: 0 0 10px rgba(0,0,0,0.1);}
    input {display:block; width: 250px; margin-bottom:10px; padding:8px;}
    button {background:#28a745;color:white;border:none;padding:10px 15px;border-radius:5px;}
  </style>
</head>
<body>
  <form method="POST">
    <h2>Tambah User Baru</h2>
    <input type="text" name="username" placeholder="Username" required>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit">Tambah</button>
  </form>
</body>
</html>
<?php } ?>
