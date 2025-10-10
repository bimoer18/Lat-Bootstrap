<?php include("koneksi.php"); ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Admin - Latest News</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark text-white">
<div class="container mt-5">
  <h2 class="mb-4">Kelola Latest News</h2>

  <!-- Form Tambah -->
  <form action="" method="POST" class="mb-4">
    <div class="row">
      <div class="col-md-3">
        <input type="text" name="gambar" class="form-control" placeholder="Nama file gambar (contoh: foto.jpg)" required>
      </div>
      <div class="col-md-3">
        <input type="text" name="judul" class="form-control" placeholder="Judul berita" required>
      </div>
      <div class="col-md-4">
        <input type="text" name="keterangan" class="form-control" placeholder="Deskripsi singkat" required>
      </div>
      <div class="col-md-2">
        <button type="submit" name="tambah" class="btn btn-danger w-100">Tambah</button>
      </div>
    </div>
  </form>

  <?php
  // Tambah data
  if (isset($_POST['tambah'])) {
    $gambar = $_POST['gambar'];
    $judul = $_POST['judul'];
    $keterangan = $_POST['keterangan'];
    $sql = "INSERT INTO latest_news (gambar, judul, keterangan) VALUES ('$gambar', '$judul', '$keterangan')";
    if ($conn->query($sql)) {
      echo "<div class='alert alert-success'>Berita berhasil ditambahkan!</div>";
    }
  }

  // Hapus data
  if (isset($_GET['hapus'])) {
    $id = $_GET['hapus'];
    $conn->query("DELETE FROM latest_news WHERE id=$id");
    echo "<div class='alert alert-warning'>Berita dihapus!</div>";
  }

  // Tampilkan data
  $result = $conn->query("SELECT * FROM latest_news ORDER BY id DESC");
  echo "<table class='table table-dark table-bordered mt-3'><tr><th>Gambar</th><th>Judul</th><th>Keterangan</th><th>Aksi</th></tr>";
  while ($row = $result->fetch_assoc()) {
    echo "<tr>
      <td>{$row['gambar']}</td>
      <td>{$row['judul']}</td>
      <td>{$row['keterangan']}</td>
      <td><a href='?hapus={$row['id']}' class='btn btn-sm btn-danger'>Hapus</a></td>
    </tr>";
  }
  echo "</table>";
  ?>
</div>
</body>
</html>
