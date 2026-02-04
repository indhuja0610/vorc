<?php
include '../config.php';   // adjust path if needed

// Check ID
if (!isset($_GET['id'])) {
    header("Location: dashboard.php");
    exit();
}

$id = $_GET['id'];

// Fetch existing enquiry
$query = "SELECT * FROM enquiries WHERE id = ?";
$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stmt, "i", $id);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

$enquiry = mysqli_fetch_assoc($result);

if (!$enquiry) {
    echo "Enquiry not found";
    exit();
}

// Update logic
if (isset($_POST['update'])) {
    $name      = $_POST['name'];
    $mobile    = $_POST['mobile'];
    $model     = $_POST['model'];
    $location  = $_POST['location'];
    $dealer_id = $_POST['dealer_id'];

    $update = "UPDATE enquiries 
               SET name=?, mobile=?, model=?, location=?, dealer_id=? 
               WHERE id=?";
    $stmt = mysqli_prepare($conn, $update);
    mysqli_stmt_bind_param($stmt, "ssssii",
        $name, $mobile, $model, $location, $dealer_id, $id
    );

    if (mysqli_stmt_execute($stmt)) {
        header("Location: dashboard.php?updated=1");
        exit();
    } else {
        $error = "Update failed!";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Enquiry</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h3 class="mb-4">✏️ Edit Enquiry</h3>

    <?php if (isset($error)): ?>
        <div class="alert alert-danger"><?= $error; ?></div>
    <?php endif; ?>

    <form method="POST">
        <div class="row">
            <div class="col-md-6 mb-3">
                <label>Name</label>
                <input type="text" name="name" class="form-control"
                       value="<?= $enquiry['name']; ?>" required>
            </div>

            <div class="col-md-6 mb-3">
                <label>Mobile</label>
                <input type="text" name="mobile" class="form-control"
                       value="<?= $enquiry['mobile']; ?>" required>
            </div>

            <div class="col-md-6 mb-3">
                <label>Model</label>
                <input type="text" name="model" class="form-control"
                       value="<?= $enquiry['model']; ?>" required>
            </div>

            <div class="col-md-6 mb-3">
                <label>Location</label>
                <input type="text" name="location" class="form-control"
                       value="<?= $enquiry['location']; ?>" required>
            </div>

            <div class="col-md-6 mb-3">
                <label>Dealer ID</label>
                <input type="number" name="dealer_id" class="form-control"
                       value="<?= $enquiry['dealer_id']; ?>" required>
            </div>
        </div>

        <button type="submit" name="update" class="btn btn-primary">
            Update Enquiry
        </button>

        <a href="dashboard.php" class="btn btn-secondary">
            Back
        </a>
    </form>
</div>

</body>
</html>
