<html>
<head><title>Jenis Kendaraan</title></head>
<body>
    <?php include 'menu.php'; ?>
    <h3>Penentuan Jenis Kendaraan Berdasarkan Jumlah Roda</h3>

    <?php
    $roda = 4;
    switch ($roda) {
        case 2:
            echo "Kendaraan roda 2: Sepeda Motor";
            break;
        case 3:
            echo "Kendaraan roda 3: Bajaj";
            break;
        case 4:
            echo "Kendaraan roda 4: Mobil";
            break;
        default:
            echo "Jenis kendaraan tidak diketahui.";
    }
    ?>
</body>
</html>