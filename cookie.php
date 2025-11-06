<?php
    // Menentukan waktu kadaluarsa cookie (5 detik dari sekarang)
    $batas = time() + 5;

    // Membuat cookie bernama "user" dengan nilai "admin"
    setcookie("user", "admin", $batas);
?>
<html>
<head>
    <title>Cookies</title>
</head>
<body>
    <?php
        // Mengecek apakah cookie "user" masih aktif
        if (isset($_COOKIE["user"])) {
            echo "Selamat Datang " . $_COOKIE["user"] . 
                 ", Cookie telah dibuat dan akan berakhir setelah 5 detik.";
        } else {
            echo "Cookie telah berakhir.";
        }
    ?>
</body>
</html>
