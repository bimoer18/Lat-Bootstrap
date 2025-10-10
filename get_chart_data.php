<?php
include("koneksi.php");

$sql = "SELECT planet, jumlah FROM planetchart ORDER BY id ASC";
$result = $conn->query($sql);

$labels = [];
$data = [];

if ($result && $result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    $labels[] = $row['planet'];
    $data[] = (float)$row['jumlah'];
  }
}

header('Content-Type: application/json'); // ⬅️ tambahkan ini penting!
echo json_encode([
  "labels" => $labels,
  "data" => $data
]);
?>
