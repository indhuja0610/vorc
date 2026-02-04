<?php
include 'config.php';

$city = $_GET['city'] ?? '';
$data = [];

if (!empty($city)) {
    $stmt = $conn->prepare("
        SELECT id, name, address 
        FROM dealers 
        WHERE city = ?
    ");
    $stmt->bind_param("s", $city);
    $stmt->execute();
    $result = $stmt->get_result();

    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

echo json_encode($data);
