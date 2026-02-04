<?php
include '../config.php';   // adjust if needed

// Check if ID exists
if (!isset($_GET['id']) || empty($_GET['id'])) {
    header("Location: dashboard.php");
    exit();
}

$id = $_GET['id'];

// Delete query
$query = "DELETE FROM enquiries WHERE id = ?";
$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stmt, "i", $id);

if (mysqli_stmt_execute($stmt)) {
    header("Location: dashboard.php?deleted=1");
    exit();
} else {
    echo "Delete failed!";
}
?>
