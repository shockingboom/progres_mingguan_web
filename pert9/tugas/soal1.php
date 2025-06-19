<?php
$roda = 4;

switch ($roda) {
    case 2:
        echo "Kendaraan dengan 2 roda: Sepeda motor<br>";
        break;
    case 3:
        echo "Kendaraan dengan 3 roda: Bajaj<br>";
        break;
    case 4:
        echo "Kendaraan dengan 4 roda: Mobil<br>";
        break;
    case 6:
        echo "Kendaraan dengan 6 roda: Truk kecil<br>";
        break;
    case 8:
        echo "Kendaraan dengan 8 roda: Truk besar<br>";
        break;
    default:
        echo "Jenis kendaraan tidak diketahui<br>";
}
?>