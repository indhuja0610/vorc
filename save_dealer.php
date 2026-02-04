<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $fullname     = $_POST['fullname'];
    $email        = $_POST['email'];
    $mobile       = $_POST['mobile'];
    $pincode      = $_POST['pincode'];
    $location     = $_POST['location'];
    $address      = $_POST['address'];
    $experience   = $_POST['experience'];
    $type         = $_POST['type'];
    $association  = $_POST['association'];

    $query = "INSERT INTO dealer_requests 
        (fullname, email, mobile, pincode, location, address, experience, property_type, association)
        VALUES 
        ('$fullname','$email','$mobile','$pincode','$location','$address','$experience','$type','$association')";

    if (mysqli_query($conn, $query)) {
        header("Location: thank_you.php");
        exit();
    } else {
        echo "Something went wrong. Please try again.";
    }
}
?>
