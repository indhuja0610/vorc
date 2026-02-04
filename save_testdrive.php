<?php
session_start();
include 'config.php'; // your DB connection

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $model = mysqli_real_escape_string($conn, $_POST['model']);
    $location = mysqli_real_escape_string($conn, $_POST['location']);
    $dealer_id = intval($_POST['dealer_id']);
    $preferred_date = $_POST['preferred_date'] ?? NULL;
    $preferred_time = $_POST['preferred_time'] ?? NULL;
    $comments = mysqli_real_escape_string($conn, $_POST['comments'] ?? '');

    $insert = mysqli_query($conn, "
        INSERT INTO test_drives 
        (name, email, phone, model, location, dealer_id, preferred_date, preferred_time, comments) 
        VALUES ('$name', '$email', '$phone', '$model', '$location', $dealer_id, 
                ".($preferred_date ? "'$preferred_date'" : "NULL").", 
                ".($preferred_time ? "'$preferred_time'" : "NULL").", 
                '$comments')
    ");

    if ($insert) {
        echo "<script>alert('Test Drive booked successfully'); window.location='index.php';</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }

} else {
    header("Location: index.php");
    exit();
}
?>
