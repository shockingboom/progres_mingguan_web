<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Perhitungan Total Pembelian (Dengan Array)</title>
</head>
<body>
    <h2>Perhitungan Total Pembelian (Dengan Array)</h2>
    <hr>

    <?php
    // 1. Konstanta untuk pajak
    define("PAJAK", 0.10);

    // 2. Array harga barang
    $barang = array(
        "Keyboard" => 150000,
        "Mouse" => 100000,
        "Monitor" => 2000000
    );

    // 3. Jumlah beli
    $namaBarang = "Keyboard";
    $jumlahBeli = 2;

    // 4. Hitung total
    $hargaSatuan = $barang[$namaBarang];
    $totalSebelumPajak = $hargaSatuan * $jumlahBeli;
    $totalPajak = $totalSebelumPajak * PAJAK;
    $totalBayar = $totalSebelumPajak + $totalPajak;

    // 5. Tampilkan hasil
    echo "Nama Barang: $namaBarang <br>";
    echo "Harga Satuan: Rp " . number_format($hargaSatuan, 0, ',', '.') . "<br>";
    echo "Jumlah Beli: $jumlahBeli <br>";
    echo "Total Harga (Sebelum Pajak): Rp " . number_format($totalSebelumPajak, 0, ',', '.') . "<br>";
    echo "Pajak (10%): Rp " . number_format($totalPajak, 0, ',', '.') . "<br>";
    echo "<strong>Total Bayar: Rp " . number_format($totalBayar, 0, ',', '.') . "</strong><br>";
    ?>
</body>
</html>