<?php
include("header.php");
include("db.php");

$artikel = $conn->query("SELECT * FROM artikel");
?>

<style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background: #f5f7fa;
        margin: 0;
        padding: 20px;
    }

    .artikel-wrapper {
        max-width: 900px;
        margin: auto;
        padding: 10px;
    }

    .artikel-card {
        background: #ffffff;
        border-radius: 12px;
        padding: 25px 30px;
        margin-bottom: 25px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .artikel-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 6px 18px rgba(0, 0, 0, 0.15);
    }

    .artikel-card h2 {
        margin-top: 0;
        color: #2c3e50;
        font-size: 24px;
        margin-bottom: 10px;
    }

    .artikel-card p {
        color: #555;
        font-size: 16px;
        line-height: 1.7;
    }

    .artikel-card .tanggal {
        font-size: 13px;
        color: #999;
        margin-bottom: 10px;
        display: block;
    }
</style>

<div class="artikel-wrapper">
    <?php
    while ($row = $artikel->fetch_assoc()) {
        // Jika kolom tanggal tidak ada di DB, bagian tanggal bisa dihapus
        $tanggal = date("d M Y", strtotime($row['tanggal'] ?? 'now')); // fallback 'now' jika tidak ada kolom
        echo '<div class="artikel-card">';
        echo '<span class="tanggal">Diposting pada ' . htmlspecialchars($tanggal) . '</span>';
        echo '<h2>' . htmlspecialchars($row['judul']) . '</h2>';
        echo '<p>' . nl2br(htmlspecialchars($row['konten'])) . '</p>';
        echo '</div>';
    }
    ?>
</div>

<?php include("footer.php"); ?>
