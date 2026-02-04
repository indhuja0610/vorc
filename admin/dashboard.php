<?php
session_start();
if (!isset($_SESSION['admin_id'])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f4f6f8;
        }

        .header {
            background: #1f3d46;
            color: white;
            padding: 15px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .container {
            padding: 40px;
        }

        .cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 25px;
        }

        .card {
            background: #fff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.08);
            text-align: center;
        }

        .card h3 {
            margin-bottom: 15px;
            color: #1f3d46;
        }

        .card a {
            display: inline-block;
            padding: 12px 25px;
            background: #1f3d46;
            color: white;
            border-radius: 30px;
            text-decoration: none;
            font-weight: bold;
        }

        .logout {
            color: white;
            text-decoration: none;
            font-weight: bold;
        }
    </style>
</head>

<body>

<div class="header">
    <h2>Admin Dashboard</h2>
    <a class="logout" href="logout.php">Logout</a>
</div>

<div class="container">

    <h3>Welcome, <?php echo $_SESSION['admin_username']; ?> 👋</h3>

    <div class="cards">

        <div class="card">
            <h3>Dealers List</h3>
            <p>View all approved dealers</p>
            <a href="dealers_list.php">View Dealers</a>
        </div>

        <div class="card">
            <h3>Dealer Enquiries</h3>
            <p>View & manage dealer requests</p>
            <a href="dealer_requests.php">View Requests</a>
        </div>

         <div class="card">
            <h3>Enquiries list</h3>
            <p>View & manage enquire</p>
            <a href="enquires.php">View Enquire</a>
        </div>

         <div class="card">
            <h3>Test Drives</h3>
            <p>View & manage test drive  requests</p>
            <a href="test.php">View test drive </a>
        </div>

    </div>

</div>

</body>
</html>
