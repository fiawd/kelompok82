<?php
include("header.php");
include("db.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    $komentar = $_POST['komentar'];

    $stmt = $conn->prepare("INSERT INTO komentar (nama, komentar) VALUES (?, ?)");
    $stmt->bind_param("ss", $nama, $komentar);
    $stmt->execute();
}
?>

<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f2f2f2;
        padding: 20px;
    }

    .komentar-form {
        background-color: #ffffff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0px 0px 10px #ccc;
        max-width: 600px;
        margin: 0 auto 30px auto;
    }

    .komentar-form input[type="text"],
    .komentar-form textarea {
        width: 100%;
        padding: 10px;
        margin: 10px 0;
        border-radius: 5px;
        border: 1px solid #ccc;
    }

    .komentar-form button {
        background-color: #4CAF50;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    .komentar-form button:hover {
        background-color: #45a049;
    }

    .komentar-list {
        max-width: 600px;
        margin: 0 auto;
    }

    .komentar-item {
        background-color: #ffffff;
        padding: 15px;
        margin-bottom: 15px;
        border-radius: 10px;
        box-shadow: 0px 0px 5px #ccc;
    }

    .komentar-item strong {
        color: #333;
        font-size: 16px;
    }

    .komentar-item p {
        margin: 8px 0 0 0;
    }

    h3 {
        text-align: center;
        color: #444;
    }
</style>

<div class="komentar-form">
    <h2>Kirim Komentar</h2>
    <form method="post">
        <label>Nama:</label>
        <input type="text" name="nama" required>
        <label>Komentar:</label>
        <textarea name="komentar" rows="4" required></textarea>
        <button type="submit">Kirim</button>
    </form>
</div>

<h3>Komentar Pengunjung</h3>
<div class="komentar-list">
    <?php
    $res = $conn->query("SELECT * FROM komentar ORDER BY id DESC");
    while ($row = $res->fetch_assoc()) {
        echo '<div class="komentar-item">';
        echo '<strong>' . htmlspecialchars($row['nama']) . '</strong>';
        echo '<p>' . nl2br(htmlspecialchars($row['komentar'])) . '</p>';
        echo '</div>';
    }
    ?>
</div>

<?php include("footer.php"); ?>
