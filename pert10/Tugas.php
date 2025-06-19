<!DOCTYPE html>
<html>
<head>
    <title>Diskon Pembayaran Mahasiswa</title>
</head>
<body>

<h2>Input Data Mahasiswa</h2>

<form method="post" action="">
    NPM : <input type="text" name="npm"><br>
    Nama : <input type="text" name="nama"><br>
    Prodi : <input type="text" name="prodi"><br>
    Semester : <input type="number" name="semester"><br>
    Biaya UKT : <input type="number" name="ukt"><br>
    <input type="submit" value="Proses">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $npm = $_POST['npm'];
    $nama = $_POST['nama'];
    $prodi = $_POST['prodi'];
    $semester = $_POST['semester'];
    $ukt = $_POST['ukt'];

    // Hitung diskon
    if ($ukt >= 5000000 && $semester > 8) {
        $diskon = 15;
    } elseif ($ukt >= 5000000) {
        $diskon = 10;
    } else {
        $diskon = 0;
    }

    $potongan = ($diskon / 100) * $ukt;
    $bayar = $ukt - $potongan;

    // Tampilkan hasil
    echo "<h3>Data Mahasiswa</h3>";
    echo "NPM : $npm<br>";
    echo "Nama : $nama<br>";
    echo "Prodi : $prodi<br>";
    echo "Semester : $semester<br>";
    echo "Biaya UKT : Rp. " . number_format($ukt,0,",",".") . "<br>";
    echo "Diskon : $diskon%<br>";
    echo "Yang Harus Dibayar : Rp. " . number_format($bayar,0,",",".");
}
?>

</body>
</html>