<?php
session_start();
include 'config.php';

if (!isset($_SESSION['admin_id'])) {
    header("Location: index.php");
    exit();
}

// DELETE DEALER
if (isset($_GET['delete'])) {
    $id = intval($_GET['delete']);
    mysqli_query($conn, "DELETE FROM dealers WHERE id = $id");
    header("Location: dealers_list.php");
    exit();
}

$result = mysqli_query($conn, "SELECT * FROM dealers ORDER BY id DESC");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dealers List</title>
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
        table {
            width: 100%;
            border-collapse: collapse;
            background: #fff;
            box-shadow: 0 8px 20px rgba(0,0,0,0.08);
        }
        th, td {
            padding: 12px 14px;
            border-bottom: 1px solid #ddd;
            vertical-align: top;
            font-size: 14px;
        }
        th {
            background: #1f3d46;
            color: white;
            text-align: left;
        }
        tr:hover {
            background: #f1f1f1;
        }
        .back-btn {
            display: inline-block;
            margin-bottom: 20px;
            padding: 10px 20px;
            background: #1f3d46;
            color: white;
            border-radius: 30px;
            text-decoration: none;
            font-weight: bold;
        }
        .address {
            max-width: 280px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }
        .btn {
            padding: 5px 12px;
            border-radius: 20px;
            text-decoration: none;
            font-size: 13px;
            color: #fff;
            font-weight: bold;
            display: inline-block;
            margin-right: 5px;
        }
        .edit { background: #007bff; }
        .delete { background: #dc3545; }
    </style>
</head>
<body>

<a href="dashboard.php" class="back-btn">← Back to Dashboard</a>

<h2>Dealers List</h2>

<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Address</th>
        <th>State</th>
        <th>City</th>
        <th>Phone</th>
        <th>Latitude</th>
        <th>Longitude</th>
        <th>Working Days</th>
        <th>Timing</th>
        <th>Action</th>
    </tr>

<?php while ($row = mysqli_fetch_assoc($result)) { ?>
<tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['name']; ?></td>
    <td class="address" title="<?php echo $row['address']; ?>">
        <?php echo $row['address']; ?>
    </td>
    <td><?php echo $row['state']; ?></td>
    <td><?php echo $row['city']; ?></td>
    <td><?php echo $row['phone']; ?></td>
    <td><?php echo $row['lat']; ?></td>
    <td><?php echo $row['lng']; ?></td>
    <td><?php echo $row['days']; ?></td>
    <td><?php echo $row['timing']; ?></td>
    <td>
        <a class="btn edit" href="edit_dealer.php?id=<?php echo $row['id']; ?>">Edit</a>
        <a class="btn delete" href="?delete=<?php echo $row['id']; ?>" onclick="return confirm('Delete this dealer?')">Delete</a>
    </td>
</tr>
<?php } ?>
</table>


<a href="add_dealer.php" class="back-btn" style="background:#28a745;">
    ➕ Add Dealer
</a>



</body>
</html>
