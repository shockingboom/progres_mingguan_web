<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pertemuan 9 - Navigasi</title>
</head>
<body>
    <h2>Navigasi Soal</h2>
    <nav>
        <a href="index.php">Beranda</a> |
        <a href="?page=soal1">Soal 1</a> |
        <a href="?page=soal2">Soal 2</a> |
        <a href="?page=soal3">Soal 3</a> |
        <a href="?page=soal4">Soal 4</a>
    </nav>
    <hr>

    <?php
    // Load file sesuai query string
    if (isset($_GET['page'])) {
        $page = $_GET['page'];
        switch ($page) {
            case 'soal1':
                include 'soal1.php';
                break;
            case 'soal2':
                include 'soal2.php';
                break;
            case 'soal3':
                include 'soal3.php';
                break;
            case 'soal4':
                include 'soal4.php';
                break;
            default:
                echo "Halaman tidak ditemukan.";
        }
    } else {
        echo "<p>Silakan pilih soal di atas.</p>";
    }
    ?>
</body>
</html>