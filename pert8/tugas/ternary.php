<html>
<head><title>Genap atau Ganjil</title></head>
<body>
    <?php include 'menu.php'; ?>
    <h3>Penentuan Genap atau Ganjil</h3>

    <?php
    $angka = 7;
    $hasil = ($angka % 2 == 0) ? "Genap" : "Ganjil";
    echo "Angka $angka adalah $hasil.";
    ?>
</body>
</html>