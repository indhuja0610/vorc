<?php
include '../config.php';

$query = "SELECT * FROM test_drives ORDER BY created_at DESC";
$result = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Test Drive Requests</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h3 class="mb-4">🚗 Test Drive Requests</h3>

    <?php if (isset($_GET['updated'])): ?>
        <div class="alert alert-success">Test drive updated successfully</div>
    <?php endif; ?>

    <?php if (isset($_GET['deleted'])): ?>
        <div class="alert alert-danger">Test drive deleted successfully</div>
    <?php endif; ?>

    <table class="table table-bordered table-hover">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Mobile</th>
                <th>Model</th>
                <th>Location</th>
                <th>Date</th>
                <th>Time</th>
                <th>Dealer</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        <?php while ($row = mysqli_fetch_assoc($result)): ?>
            <tr>
                <td><?= $row['id']; ?></td>
                <td><?= $row['name']; ?></td>
                <td><?= $row['phone']; ?></td>
                <td><?= $row['model']; ?></td>
                <td><?= $row['location']; ?></td>
                <td><?= $row['preferred_date']; ?></td>
                <td><?= $row['preferred_time']; ?></td>
                <td><?= $row['dealer_id']; ?></td>
                <td>
                    <a href="edit_test_drive.php?id=<?= $row['id']; ?>" class="btn btn-sm btn-warning">Edit</a>
                    <a href="delete_test_drive.php?id=<?= $row['id']; ?>"
                       class="btn btn-sm btn-danger"
                       onclick="return confirm('Delete this test drive request?');">
                       Delete
                    </a>
                </td>
            </tr>
        <?php endwhile; ?>
        </tbody>
    </table>
</div>
  <a href="dashboard.php" class="btn btn-secondary">Back</a>
</body>
</html>
