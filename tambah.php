<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Data User</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 30px; }
        form { width: 300px; }
        label { display: block; margin-top: 10px; }
        input[type="text"], input[type="email"] {
            width: 100%; padding: 8px; margin-top: 5px;
            border: 1px solid #ccc; border-radius: 4px;
        }
        input[type="submit"] {
            margin-top: 15px; padding: 8px 16px;
            background-color: #4CAF50; color: white;
            border: none; border-radius: 4px; cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        a { display: inline-block; margin-top: 10px; text-decoration: none; color: #333; }
    </style>
</head>
<body>
    <h2>Tambah Data User</h2>
    <form action="proses_tambah.php" method="POST">
        <label>Nama:</label>
        <input type="text" name="username" required>

        <label>Email:</label>
        <input type="email" name="password" required>

        <input type="submit" value="Simpan">
    </form>
    <a href="index.php">← Kembali ke Daftar</a>
</body>
</html>
