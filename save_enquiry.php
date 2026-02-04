<?php
session_start();
include 'config.php'; // your DB connection

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
    $model = mysqli_real_escape_string($conn, $_POST['model']);
    $location = mysqli_real_escape_string($conn, $_POST['location']);
    $dealer_id = intval($_POST['dealer_id']);

    $insert = mysqli_query($conn, "
        INSERT INTO enquiries (name, mobile, model, location, dealer_id) 
        VALUES ('$name', '$mobile', '$model', '$location', $dealer_id)
    ");

    if ($insert) {
        echo "<script>alert('Enquiry submitted successfully'); window.location='index.php';</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
} else {
    header("Location: index.php");
    exit();
}
?>
