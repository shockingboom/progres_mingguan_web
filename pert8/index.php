<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pertemuan10</title>
</head>
<body>
    <?php
    $nilai = 90;
    if ($nilai >= 80) {
        echo "Nilai A";

    } elseif($nilai>= 70) {
        echo "Nilai B";

    } else {
        echo " Nilai C";
    }
    echo "<br>";


    $umur = 20;
    $ktp = true;
    if ($umur>= 17 && $ktp) {
        echo "Boleh memilih";
    }
    echo "<br>";


    ?>
    <?php
    if(!empty($_POST['nama'])) {
        echo "Nama: " .htmlspecialchars($POST['nama']);
    
    } else {
        echo "Nama tidak boleh kosong!";
    }

    ?>

    
</body>
</html>