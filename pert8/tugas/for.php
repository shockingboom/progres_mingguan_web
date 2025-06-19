<html>
<head><title>Bilangan Genap</title></head>
<body>
    <?php include 'menu.php'; ?>
    <h3>Bilangan Genap dari 2 sampai 10</h3>

    <?php
    for ($i = 2; $i <= 10; $i += 2) {
        echo "$i ";
    }
    ?>
</body>
</html>