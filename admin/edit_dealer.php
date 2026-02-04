<?php
session_start();
include 'config.php';

if (!isset($_SESSION['admin_id'])) {
    header("Location: index.php");
    exit();
}

$id = intval($_GET['id']);
$dealer = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM dealers WHERE id = $id"));

if (!$dealer) {
    echo "Dealer not found.";
    exit();
}

// Update logic
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $state = $_POST['state'];
    $city = $_POST['city'];
    $phone = $_POST['phone'];
    $lat = $_POST['lat'];
    $lng = $_POST['lng'];
    $days = $_POST['days'];
    $timing = $_POST['timing'];

    mysqli_query($conn, "
        UPDATE dealers SET
        name='$name',
        address='$address',
        state='$state',
        city='$city',
        phone='$phone',
        lat='$lat',
        lng='$lng',
        days='$days',
        timing='$timing'
        WHERE id=$id
    ");

    header("Location: dealers_list.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Dealer</title>
    <style>
        body { font-family: Arial; background: #f4f6f8; padding: 50px; }
        .container { background: #fff; padding: 30px; border-radius: 10px; max-width: 600px; margin: auto; }
        input, textarea { width: 100%; padding: 10px; margin-bottom: 15px; border-radius: 5px; border: 1px solid #ccc; }
        button { padding: 10px 20px; border-radius: 30px; border: none; background: #1f3d46; color: white; font-weight: bold; }
    </style>
</head>
<body>
<div class="container">
<h2>Edit Dealer</h2>
<form method="post">
    <input type="text" name="name" value="<?= $dealer['name']; ?>" required>
    <textarea name="address" rows="3" required><?= $dealer['address']; ?></textarea>
    <input type="text" name="state" value="<?= $dealer['state']; ?>" required>
    <input type="text" name="city" value="<?= $dealer['city']; ?>" required>
    <input type="text" name="phone" value="<?= $dealer['phone']; ?>" required>
    <input type="text" name="lat" value="<?= $dealer['lat']; ?>">
    <input type="text" name="lng" value="<?= $dealer['lng']; ?>">
    <input type="text" name="days" value="<?= $dealer['days']; ?>" required>
    <input type="text" name="timing" value="<?= $dealer['timing']; ?>" required>
    <button type="submit">Update Dealer</button>
</form>
</div>
</body>
</html>
