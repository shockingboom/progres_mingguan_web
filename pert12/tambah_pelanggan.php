<?php
       session_start();
       if (!isset($_SESSION['login_Un51k4'])) {
            header("Location: login.php?message=" . urlencode("Mengakses fitur harus login dulu bro."));
           exit;
       }
   ?>
   
<?php include 'nav.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
   <title>Tambah Pelanggan</title>
</head>
<body>
   <div class="container mt-4">
       <h2>Tambah Pelanggan</h2>
       <form method="post" action="proses_tambah_pelanggan.php">
           <div class="mb-3">
               <label for="Nama" class="form-label">Nama</label>
               <input type="text" class="form-control" id="Nama" name="Nama" required>
           </div>
           <div class="mb-3">
               <label for="Alamat" class="form-label">Alamat</label>
               <input type="text" class="form-control" id="Alamat" name="Alamat" required>
           </div>
           <div class="mb-3">
               <label for="Email" class="form-label">Email</label>
               <input type="text" class="form-control" id="Email" name="Email" required>
           </div>
           <div class="mb-3">
               <label for="Telepon" class="form-label">Telepon</label>
               <input type="number" class="form-control" id="Telepon" name="Telepon" step="0.01" required>
           </div>
           <button type="submit" class="btn btn-primary">Tambah Pelanggan</button>
       </form>
   </div>
</body>
</html>
