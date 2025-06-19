<?php
include 'koneksi_db.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   $Nama = $_POST['Nama'];
   $Alamat = $_POST['Alamat'];
   $Email = $_POST['Email'];
   $Telepon = $_POST['Telepon'];


   $stmt = $conn->prepare("INSERT INTO Pelanggan (Nama, Alamat, Email, Telepon) VALUES (?, ?, ?, ?)");
   $stmt->bind_param("ssss", $Nama, $Alamat, $Email, $Telepon);


   if ($stmt->execute()) {
       echo "<script>
           alert('Buku berhasil ditambahkan!');
           window.location.href = 'tambah_buku.php';
       </script>";
   } else {
       echo "<script>
           alert('Gagal menambahkan buku: " . addslashes($stmt->error) . "');
           window.location.href = 'tambah_buku.php';
       </script>";
   }
}
?>
