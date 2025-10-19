<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
</head>
<body>
    <h2>Selamat datang, <?php echo htmlspecialchars($_SESSION['username']); ?></h2>
    <p><a href="logout.php">Logout</a></p>
</body>
</html>
