<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pertemuan 9</title>
</head>
<body>
    <?php
   
    $hari = "Selasa";
    switch ($hari) {
        case "Senin":
            echo "Hari pertama kerja!<br>";
            break;
        case "Jumat":
            echo "Hampir akhir pekan!<br>";
            break;
        case "Minggu":
            echo "Libur akhir pekan!<br>";
            break;
        default:
            echo "Hari Biasa.<br>";
    }

   
    for ($i = 1; $i <= 5; $i++) {
        echo "Angka ke-".$i."<br>";
    }

   
    $buah = ["Apel", "Jeruk", "Mangga"];
    for ($i = 0; $i < count($buah); $i++) {
        echo $buah[$i]."<br>";
    }

    
    $nilai = 1;
    while ($nilai <= 5) {
        echo "Nilai: ".$nilai."<br>";
        $nilai++;
    }

   
    $mahasiswa = [
        "10001" => "Andi",
        "10002" => "Budi",
        "10003" => "Citra"
    ];
    foreach ($mahasiswa as $nim => $nama) {
        echo "NIM: ".$nim.", Nama: ".$nama."<br>";
    }

  
    $umur = 19;
    $status = ($umur >= 18) ? "Dewasa" : "Anak-anak";
    echo "Status: ".$status."<br>";

    
    include_once 'nama_file.php';
    ?>

    <nav>
        <a href="index.php">Beranda</a> |
        <a href="about.php">Tentang</a> |
        <a href="contact.php">Kontak</a>
    </nav>
</body>
</html>