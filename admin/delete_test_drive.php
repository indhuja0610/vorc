<?php
include '../config.php';

if (!isset($_GET['id'])) {
    header("Location: view_test_drives.php");
    exit();
}

$id = $_GET['id'];

$query = "DELETE FROM test_drives WHERE id=?";
$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stmt, "i", $id);
mysqli_stmt_execute($stmt);

header("Location: test.php?deleted=1");
exit();


