<html>
<head><title>Daftar Hewan</title></head>
<body>
    <?php include 'menu.php'; ?>
    <h3>Daftar Nama Hewan</h3>

    <?php
    $hewan = ["Kucing", "Anjing", "Burung", "Ikan"];
    foreach ($hewan as $h) {
        echo $h . "<br>";
    }
    ?>
</body>
</html>