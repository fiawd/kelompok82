<?php
session_start();

$error = '';

$valid_username = 'kelompok';
$valid_password = 'kelompok8123';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($_POST['username'] === $valid_username && $_POST['password'] === $valid_password) {
        $_SESSION['login'] = $valid_username;
        header("Location: index.php");
        exit;
    } else {
        $error = "Username atau password salah!";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Login - Website Saya</title>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
<style>
  /* Reset */
  * {
    margin: 0; padding: 0; box-sizing: border-box;
  }
  body, html {
    height: 100%;
    font-family: 'Poppins', sans-serif;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .login-card {
    background: #fff;
    padding: 40px 35px 50px;
    border-radius: 15px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.12);
    width: 360px;
    transition: box-shadow 0.3s ease;
  }
  .login-card:hover {
    box-shadow: 0 15px 40px rgba(0,0,0,0.2);
  }

  h2 {
    text-align: center;
    color: #444;
    margin-bottom: 30px;
    font-weight: 600;
  }

  .input-group {
    position: relative;
    margin-bottom: 25px;
  }

  .input-group svg {
    position: absolute;
    top: 50%;
    left: 15px;
    transform: translateY(-50%);
    fill: #888;
    width: 20px;
    height: 20px;
  }

  input[type="text"],
  input[type="password"] {
    width: 100%;
    padding: 12px 15px 12px 45px;
    font-size: 16px;
    border: 1.8px solid #ddd;
    border-radius: 10px;
    transition: border-color 0.3s, box-shadow 0.3s;
  }
  input[type="text"]:focus,
  input[type="password"]:focus {
    border-color: #764ba2;
    box-shadow: 0 0 8px rgba(118, 75, 162, 0.5);
    outline: none;
  }

  button {
    width: 100%;
    padding: 14px 0;
    border: none;
    border-radius: 12px;
    background: linear-gradient(90deg, #764ba2, #667eea);
    color: white;
    font-size: 18px;
    font-weight: 600;
    cursor: pointer;
    transition: background 0.4s ease;
    box-shadow: 0 4px 15px rgba(118, 75, 162, 0.5);
    user-select: none;
  }
  button:hover,
  button:focus {
    background: linear-gradient(90deg, #667eea, #764ba2);
    box-shadow: 0 6px 20px rgba(118, 75, 162, 0.7);
    outline: none;
  }

  .error {
    background: #ff4c4c;
    color: white;
    font-weight: 600;
    padding: 10px 15px;
    border-radius: 8px;
    margin-bottom: 20px;
    text-align: center;
    animation: fadeIn 0.5s ease forwards;
  }

  @keyframes fadeIn {
    from {opacity: 0; transform: translateY(-10px);}
    to {opacity: 1; transform: translateY(0);}
  }
</style>
</head>
<body>

  <form method="post" autocomplete="off" class="login-card" novalidate>
    <h2>Login Akun</h2>

    <?php if ($error): ?>
      <div class="error" aria-live="assertive"><?= htmlspecialchars($error) ?></div>
    <?php endif; ?>

    <div class="input-group">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12 12c2.21 0 4-1.79 4-4S14.21 4 12 4 8 5.79 8 8s1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/></svg>
      <input type="text" name="username" placeholder="Username" required autofocus />
    </div>

    <div class="input-group">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12 17a2 2 0 0 0 2-2v-3a2 2 0 1 0-4 0v3a2 2 0 0 0 2 2zm6-7v-2a6 6 0 0 0-12 0v2H4v12h16V10h-2zm-6-5a4 4 0 0 1 4 4v2H8v-2a4 4 0 0 1 4-4z"/></svg>
      <input type="password" name="password" placeholder="Password" required />
    </div>

    <button type="submit" aria-label="Login ke sistem">Masuk</button>
  </form>

</body>
</html>
