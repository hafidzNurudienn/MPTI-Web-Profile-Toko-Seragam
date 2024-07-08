<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "toko_seragam";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$productId = $_GET['id'];

$sql = "SELECT p.id, 
       p.nama, 
       p.deskripsi, 
       p.detail_produk,
       GROUP_CONCAT(DISTINCT u.ukuran ORDER BY u.urutan ASC SEPARATOR ',') AS ukuran,
       GROUP_CONCAT(DISTINCT u.harga ORDER BY u.urutan ASC SEPARATOR ',') AS harga,
       GROUP_CONCAT(DISTINCT g.gambar ORDER BY g.id ASC SEPARATOR ',') AS gambar
       FROM produk p
       JOIN ukuran u ON p.id = u.produk_id
       JOIN gambar g ON p.id = g.produk_id
       WHERE p.id = ?
       GROUP BY p.id, p.nama, p.deskripsi, p.detail_produk";

$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $productId);
$stmt->execute();
$result = $stmt->get_result();

$product = [];
if ($result->num_rows > 0) {
    $product = $result->fetch_assoc();
}

$stmt->close();
$conn->close();

header('Content-Type: application/json');
echo json_encode($product);
?>
