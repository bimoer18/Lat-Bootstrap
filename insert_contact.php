<?php
include("koneksi.php");

$nama = $_POST['nama'] ?? '';
$email = $_POST['email'] ?? '';
$pesan = $_POST['pesan'] ?? '';

if ($nama && $email && $pesan) {
  $stmt = $conn->prepare("INSERT INTO contact_messages (nama, email, pesan) VALUES (?, ?, ?)");
  $stmt->bind_param("sss", $nama, $email, $pesan);
  if ($stmt->execute()) {
    echo "Pesan berhasil dikirim!";
  } else {
    echo "Gagal menyimpan pesan.";
  }
} else {
  echo "Semua field harus diisi.";
}
?>
