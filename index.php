<?php
session_start();
ob_start();

// Mengecek apakah pengguna sudah login
if (empty($_SESSION['username'])) {
    echo "<script>alert('Anda harus login terlebih dahulu');</script>";
    echo "<meta http-equiv='refresh' content='0; url=login.php'>";
    exit;
} else {
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        Dashboard
    </header>

    <div class="container">
        <aside>
            <ul class="menu">
                <li><a href="index.php">Dashboard</a></li>
                <li><a href="logout.php">Keluar</a></li>
            </ul>
        </aside>

        <section class="main">
            <?php
                $username = $_SESSION['username'];
                echo "<center>";
                echo "<h3>Selamat Datang</h3>";
                echo "<p>Anda login sebagai <b>" . htmlspecialchars($username) . "</b></p>";
                echo "</center>";
            ?>
        </section>
    </div>

    <footer>
        Copyright &copy; 2024
    </footer>
</body>
</html>
<?php
}
?>
