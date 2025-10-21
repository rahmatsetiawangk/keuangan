<?php include 'db.php'; ?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Users</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 30px; }
        table { border-collapse: collapse; width: 70%; }
        th, td { border: 1px solid #999; padding: 8px 12px; text-align: left; }
        th { background-color: #f2f2f2; }
        a { text-decoration: none; color: white; background-color: #4CAF50; padding: 6px 12px; border-radius: 4px; }
        a:hover { background-color: #45a049; }
    </style>
</head>
<body>
    <h2>Data Userku</h2>

    <a href="tambah.php">+ Tambah Data</a>
    <br><br>

    <table>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Email</th>
        </tr>

        <?php
        $sql = "SELECT id, username, password FROM keuangan_users";
        $result = $conn->query($sql);

        if ($result && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($row['id']) . "</td>";
                echo "<td>" . htmlspecialchars($row['username']) . "</td>";
                echo "<td>" . htmlspecialchars($row['password']) . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='3'>Tidak ada data ditemukan</td></tr>";
        }

        $conn->close();
        ?>
    </table>
</body>
</html>
