<?php
include 'config.php';

$locations = [];

$query = "SELECT DISTINCT city FROM dealers ORDER BY city ASC";
$result = $conn->query($query);

while ($row = $result->fetch_assoc()) {
    $locations[] = $row['city'];
}

echo json_encode($locations);
