<?php
$conn = new mysqli("localhost", "root", "", "vorco");
$conn->set_charset("utf8");

$state = $_GET['state'] ?? '';
$city  = $_GET['city'] ?? '';

$sql = "SELECT * FROM dealers WHERE 1";

if ($state != '') {
    $sql .= " AND state='$state'";
}

if ($city != '' && $city != 'All Cities') {
    $sql .= " AND city='$city'";
}

$result = $conn->query($sql);

$data = [];
while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}

echo json_encode($data);
