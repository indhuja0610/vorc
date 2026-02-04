<?php
session_start();
include 'config.php';

if (!isset($_SESSION['admin_id'])) {
    header("Location: index.php");
    exit();
}

if (isset($_POST['submit'])) {

    $name    = $_POST['name'];
    $address = $_POST['address'];
    $state   = $_POST['state'];
    $city    = $_POST['city'];
    $phone   = $_POST['phone'];
    $lat     = $_POST['lat'];
    $lng     = $_POST['lng'];
    $days    = $_POST['days'];
    $timing  = $_POST['timing'];

    $query = "INSERT INTO dealers 
        (name, address, state, city, phone, lat, lng, days, timing)
        VALUES 
        ('$name','$address','$state','$city','$phone','$lat','$lng','$days','$timing')";

    mysqli_query($conn, $query);

    header("Location: dealers_list.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Add Dealer</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f8;
            padding: 30px;
        }
        h2 {
            color: #1f3d46;
            margin-bottom: 20px;
        }
        form {
            background: #fff;
            padding: 25px;
            max-width: 650px;
            border-radius: 10px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.08);
        }
        label {
            font-weight: bold;
            display: block;
            margin-top: 15px;
        }
        input, textarea {
            width: 100%;
            padding: 10px;
            margin-top: 6px;
            border-radius: 6px;
            border: 1px solid #ccc;
        }
        textarea {
            resize: vertical;
        }
        .btn {
            margin-top: 20px;
            padding: 10px 25px;
            border-radius: 30px;
            border: none;
            font-weight: bold;
            cursor: pointer;
        }
        .save {
            background: #28a745;
            color: white;
        }
        .back {
            background: #6c757d;
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 30px;
            margin-left: 10px;
        }
    </style>
</head>
<body>

<a href="dealers_list.php" class="back">← Back</a>

<h2>➕ Add Dealer</h2>

<form method="POST">
    <label>Dealer Name</label>
    <input type="text" name="name" required>

    <label>Address</label>
    <textarea name="address" required></textarea>

    <label>State</label>
    <input type="text" name="state" required>

    <label>City</label>
    <input type="text" name="city" required>

    <label>Phone</label>
    <input type="text" name="phone" required>

    <label>Latitude</label>
    <input type="text" name="lat">

    <label>Longitude</label>
    <input type="text" name="lng">

    <label>Working Days</label>
    <input type="text" name="days" placeholder="Mon - Sat">

    <label>Timing</label>
    <input type="text" name="timing" placeholder="9AM - 6PM">

    <button type="submit" name="submit" class="btn save">Save Dealer</button>
</form>

</body>
</html>
