<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Aplikasi</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <section class="login-box">
            <h2>Login Aplikasi</h2>
            <form method="post" action="ceklogin.php">
                <input type="text" placeholder="Username" name="username" id="username" required>
                <input type="password" placeholder="Password" name="password" id="password" required>
                <input type="submit" value="Login">
            </form>
        </section>
    </div>
</body>
</html>
