<?php
session_start();
include '../config.php'; // DB connection

if (!isset($_SESSION['admin_id'])) {
    header("Location: ../index.php");
    exit();
}

// Fetch enquiries
$result = mysqli_query($conn, "SELECT e.*, d.name AS dealer_name 
                               FROM enquiries e 
                               LEFT JOIN dealers d ON e.dealer_id = d.id
                               ORDER BY e.id DESC");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Enquiries List</title>
    <style>
        body { font-family: Arial; background: #f4f6f8; padding: 30px; }
        h2 { color: #1f3d46; margin-bottom: 20px; }
        table { width: 100%; border-collapse: collapse; background: #fff; box-shadow: 0 8px 20px rgba(0,0,0,0.08);}
        th, td { padding: 12px; border-bottom: 1px solid #ddd; font-size: 14px; }
        th { background: #1f3d46; color: #fff; text-align: left; }
        tr:hover { background: #f1f1f1; }
        .btn { padding: 6px 14px; border-radius: 20px; color: #fff; font-size: 13px; font-weight: bold; text-decoration: none; }
        .edit { background: #007bff; }
        .delete { background: #dc3545; }
        .back { display: inline-block; margin-bottom: 15px; color: #1f3d46; font-weight: bold; text-decoration: none; }
    </style>
</head>
<body>

<a class="back" href="dashboard.php">← Back to Dashboard</a>
<h2>Enquiries List</h2>

<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Mobile</th>
        <th>Model</th>
        <th>Location</th>
        <th>Dealer</th>
        <th>Created At</th>
        <th>Action</th>
    </tr>

<?php while($row = mysqli_fetch_assoc($result)) { ?>
<tr>
    <td><?= $row['id']; ?></td>
    <td><?= $row['name']; ?></td>
    <td><?= $row['mobile']; ?></td>
    <td><?= $row['model']; ?></td>
    <td><?= $row['location']; ?></td>
    <td><?= $row['dealer_name']; ?></td>
    <td><?= $row['created_at']; ?></td>
    <td>
        <a class="btn edit" href="edit_enquiry.php?id=<?= $row['id']; ?>">Edit</a>
        <a class="btn delete" href="delete_enquiry.php?id=<?= $row['id']; ?>" 
           onclick="return confirm('Delete this enquiry?')">Delete</a>
    </td>
</tr>
<?php } ?>

</table>
</body>
</html>
