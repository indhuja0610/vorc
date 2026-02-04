<?php
session_start();
include '../config.php';

/* ===========================
   SESSION CHECK
=========================== */
if (!isset($_SESSION['admin_id'])) {
    header("Location: ../index.php");
    exit();
}

/* ===========================
   ACCEPT DEALER
=========================== */
if (isset($_GET['accept'])) {

    $id = intval($_GET['accept']);

    // Fetch request details
    $fetch = mysqli_query($conn, "SELECT * FROM dealer_requests WHERE id = $id");

    if ($row = mysqli_fetch_assoc($fetch)) {

        // Mapping dealer data
        $name    = $row['fullname'];
        $address = $row['address'];
        $city    = $row['location'];
        $state   = "Tamil Nadu";            // default
        $phone   = $row['mobile'];

        // Default admin values
        $lat    = NULL;
        $lng    = NULL;
        $days   = "Mon-Fri";
        $timing = "9:30 AM - 6:00 PM";

        // Insert into dealers table
        mysqli_query($conn, "
            INSERT INTO dealers 
            (name, address, state, city, phone, lat, lng, days, timing)
            VALUES (
                '$name',
                '$address',
                '$state',
                '$city',
                '$phone',
                NULL,
                NULL,
                '$days',
                '$timing'
            )
        ");

        // Remove request after approval
        mysqli_query($conn, "DELETE FROM dealer_requests WHERE id = $id");
    }

    header("Location: dealer_requests.php");
    exit();
}

/* ===========================
   DELETE REQUEST
=========================== */
if (isset($_GET['delete'])) {
    $id = intval($_GET['delete']);
    mysqli_query($conn, "DELETE FROM dealer_requests WHERE id = $id");
    header("Location: dealer_requests.php");
    exit();
}

/* ===========================
   FETCH DEALER REQUESTS
=========================== */
$results = mysqli_query($conn, "SELECT * FROM dealer_requests ORDER BY id DESC");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dealer Requests</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f8;
            padding: 30px;
        }
        h2 {
            color: #1f3d46;
        }
        table {
            width: 100%;
            background: #fff;
            border-collapse: collapse;
            box-shadow: 0 8px 20px rgba(0,0,0,.08);
        }
        th, td {
            padding: 12px;
            border-bottom: 1px solid #ddd;
            font-size: 14px;
            vertical-align: top;
        }
        th {
            background: #1f3d46;
            color: #fff;
            text-align: left;
        }
        tr:hover {
            background: #f1f1f1;
        }
        .btn {
            padding: 6px 16px;
            border-radius: 20px;
            color: #fff;
            font-size: 13px;
            font-weight: bold;
            text-decoration: none;
        }
        .accept { background: #28a745; }
        .delete { background: #dc3545; }
        .back {
            display: inline-block;
            margin-bottom: 15px;
            color: #1f3d46;
            font-weight: bold;
            text-decoration: none;
        }
    </style>
</head>

<body>

<a class="back" href="dashboard.php">← Back to Dashboard</a>
<h2>Dealer Requests</h2>

<table>
    <tr>
        <th>Name</th>
        <th>Mobile</th>
        <th>Email</th>
        <th>Pincode</th>
        <th>City</th>
        <th>Address</th>
        <th>Experience</th>
        <th>Property</th>
        <th>Association</th>
        <th>Action</th>
    </tr>

<?php while ($row = mysqli_fetch_assoc($results)) { ?>
<tr>
    <td><?= $row['fullname']; ?></td>
    <td><?= $row['mobile']; ?></td>
    <td><?= $row['email']; ?></td>
    <td><?= $row['pincode']; ?></td>
    <td><?= $row['location']; ?></td>
    <td><?= $row['address']; ?></td>
    <td><?= $row['experience']; ?></td>
    <td><?= $row['property_type']; ?></td>
    <td><?= $row['association']; ?></td>
    <td>
        <a class="btn accept" 
           href="?accept=<?= $row['id']; ?>" 
           onclick="return confirm('Accept this dealer?')">
           Accept
        </a>
        <a class="btn delete" 
           href="?delete=<?= $row['id']; ?>" 
           onclick="return confirm('Delete this request?')">
           Delete
        </a>
    </td>
</tr>
<?php } ?>

</table>

</body>
</html>
