<?php
   include 'koneksi_db.php'; // Koneksi database


   // Inisialisasi variabel pencarian
   $search_judul = isset($_GET['Nama']) ? $_GET['Nama'] : '';


   // Query untuk menampilkan Pelanggan dengan filter pencarian
   $query = "SELECT * FROM pelanggan WHERE 1=1";
   if (!empty($search_judul)) {
       $query .= " AND Nama LIKE '%" . $conn->real_escape_string($search_judul) . "%'";
   }


   $result = $conn->query($query);
?>
