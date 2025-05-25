<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Website Saya</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(to bottom right, #e0f7fa, #ffffff);
            height: 100vh;
            display: flex;
            flex-direction: column;
        }

        /* Navigasi kanan atas */
        .navbar {
            display: flex;
            justify-content: flex-end;
            background-color: #2c3e50;
            padding: 15px 30px;
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .navbar a {
            color: white;
            text-decoration: none;
            margin-left: 20px;
            font-size: 16px;
            transition: color 0.3s ease;
        }

        .navbar a:hover {
            color: #1abc9c;
        }

        /* Judul tengah halaman */
        .welcome {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            font-size: 36px;
            color: #2c3e50;
            padding: 40px;
        }

        /* Tambahan garis dekoratif */
        .underline {
            width: 60px;
            height: 4px;
            background-color: #1abc9c;
            margin: 10px auto;
            border-radius: 2px;
        }

        footer {
            text-align: center;
            padding: 20px;
            background-color: #ecf0f1;
            color: #7f8c8d;
        }
    </style>
</head>
<body>

<!-- Navigasi di kanan atas -->
<div class="navbar">
    <a href="index.php">Home</a>
    <a href="artikel.php">Artikel</a>
    <a href="contact.php">Kontak</a>
    <a href="login.php">Login</a>
</div>

<!-- Judul tengah -->
<div class="welcome">
    <div>
        Selamat Datang di Website kami by kelompok 8
        <div class="underline"></div>
    </div>
</div>

</body>
</html>
