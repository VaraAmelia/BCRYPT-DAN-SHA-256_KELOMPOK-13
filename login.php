<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Sistem</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

    <h1>SISTEM LOGIN</h1>

    <p class="subtitle">
        Implementasi Bcrypt dan SHA-256
    </p>

    <form action="proses_login.php" method="POST">

        <label>Username</label>

        <input type="text"
        name="username"
        placeholder="Masukkan Username"
        required>

        <label>Password</label>

        <input type="password"
        name="password"
        placeholder="Masukkan Password"
        required>

        <button type="submit">
            Login
        </button>

    </form>

    <p class="link">
        Belum punya akun?
        <a href="register.php">
            Register
        </a>
    </p>

</div>

</body>
</html>