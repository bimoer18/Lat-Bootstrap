<?php
include("koneksi.php");
header('Content-Type: application/json');

$sql = "SELECT nama, nilai FROM planet_data ORDER BY id ASC";
$result = $conn->query($sql);

$data = [];
while ($row = $result->fetch_assoc()) {
  $data[] = $row;
}
echo json_encode($data);
?>
