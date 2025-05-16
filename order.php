<?php
$item = $_POST['item'];
$qty = (int)$_POST['qty'];
$price = (int)$_POST['price'];
$total = $qty * $price;

$conn = new mysqli('localhost', 'root', '', 'ordersystem');
if ($conn->connect_error) die("連線失敗: " . $conn->connect_error);

$sql = "INSERT INTO orders (item, qty, price, total) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("siii", $item, $qty, $price, $total);
$stmt->execute();

echo "訂單已送出，共計：$total 元";
$stmt->close();
$conn->close();
?>