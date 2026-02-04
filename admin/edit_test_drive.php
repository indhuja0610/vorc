<?php
include '../config.php';

if (!isset($_GET['id'])) {
    header("Location: test.php");
    exit();
}

$id = $_GET['id'];

$query = "SELECT * FROM test_drives WHERE id=?";
$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stmt, "i", $id);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$data = mysqli_fetch_assoc($result);

if (!$data) {
    echo "Test drive not found";
    exit();
}

if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $model = $_POST['model'];
    $location = $_POST['location'];
    $date = $_POST['preferred_date'];
    $time = $_POST['preferred_time'];
    $dealer = $_POST['dealer_id'];
    $comments = $_POST['comments'];

    $update = "UPDATE test_drives SET
        name=?, email=?, phone=?, model=?, location=?,
        preferred_date=?, preferred_time=?, dealer_id=?, comments=?
        WHERE id=?";

    $stmt = mysqli_prepare($conn, $update);
    mysqli_stmt_bind_param(
        $stmt,
        "sssssssssi",
        $name, $email, $phone, $model, $location,
        $date, $time, $dealer, $comments, $id
    );

    mysqli_stmt_execute($stmt);
    header("Location: test.php?updated=1");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Test Drive</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h3>✏️ Edit Test Drive</h3>

    <form method="POST">
        <div class="row">
            <div class="col-md-6 mb-3">
                <label>Name</label>
                <input type="text" name="name" class="form-control" value="<?= $data['name']; ?>" required>
            </div>

            <div class="col-md-6 mb-3">
                <label>Email</label>
                <input type="email" name="email" class="form-control" value="<?= $data['email']; ?>" required>
            </div>

            <div class="col-md-6 mb-3">
                <label>Phone</label>
                <input type="text" name="phone" class="form-control" value="<?= $data['phone']; ?>" required>
            </div>

            <div class="col-md-6 mb-3">
                <label>Model</label>
                <input type="text" name="model" class="form-control" value="<?= $data['model']; ?>">
            </div>

            <div class="col-md-6 mb-3">
                <label>Location</label>
                <input type="text" name="location" class="form-control" value="<?= $data['location']; ?>">
            </div>

            <div class="col-md-6 mb-3">
                <label>Dealer ID</label>
                <input type="number" name="dealer_id" class="form-control" value="<?= $data['dealer_id']; ?>">
            </div>

            <div class="col-md-6 mb-3">
                <label>Date</label>
                <input type="date" name="preferred_date" class="form-control" value="<?= $data['preferred_date']; ?>">
            </div>

            <div class="col-md-6 mb-3">
                <label>Time</label>
                <input type="text" name="preferred_time" class="form-control" value="<?= $data['preferred_time']; ?>">
            </div>

            <div class="col-md-12 mb-3">
                <label>Comments</label>
                <textarea name="comments" class="form-control"><?= $data['comments']; ?></textarea>
            </div>
        </div>

        <button name="update" class="btn btn-primary">Update</button>
        <a href="test.php" class="btn btn-secondary">Back</a>
    </form>
</div>

</body>
</html>
