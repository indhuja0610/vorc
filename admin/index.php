<?php
session_start();
include 'config.php';

$error = "";

if (isset($_POST['login'])) {

    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    $query = "SELECT * FROM users 
              WHERE username='$username' 
              AND password='$password'
              AND role='admin'
              AND status=1";

    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $user = mysqli_fetch_assoc($result);

        $_SESSION['admin_id'] = $user['id'];
        $_SESSION['admin_username'] = $user['username'];

        header("Location: dashboard.php");
        exit();
    } else {
        $error = "Invalid username or password";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
        body {
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(135deg, #1f3d46, #2b6f7c);
            font-family: Arial, sans-serif;
        }
        .login-box {
            background: white;
            padding: 35px;
            width: 350px;
            border-radius: 12px;
            box-shadow: 0 12px 30px rgba(0,0,0,0.25);
            text-align: center;
        }
        h2 {
            margin-bottom: 25px;
            color: #1f3d46;
        }
        label {
            display: block;
            text-align: left;
            font-weight: bold;
            margin-top: 15px;
            font-size: 14px;
        }
        input {
            width: 100%;
            padding: 10px;
            margin-top: 6px;
            border-radius: 6px;
            border: 1px solid #ccc;
            font-size: 14px;
        }
        button {
            width: 100%;
            padding: 12px;
            margin-top: 25px;
            background: #1f3d46;
            border: none;
            border-radius: 30px;
            color: white;
            font-weight: bold;
            cursor: pointer;
            font-size: 15px;
        }
        button:hover {
            background: #173038;
        }
        .error {
            background: #ffe5e5;
            color: #c0392b;
            padding: 10px;
            border-radius: 6px;
            margin-bottom: 15px;
            font-size: 14px;
        }
        .footer {
            margin-top: 20px;
            font-size: 12px;
            color: #777;
        }
    </style>
</head>
<body>

<div class="login-box">
    <h2>Admin Login</h2>

    <?php if (!empty($error)): ?>
        <div class="error"><?= $error; ?></div>
    <?php endif; ?>

    <form method="POST">
        <label>Username</label>
        <input type="text" name="username" required>

        <label>Password</label>
        <input type="password" name="password" required>

        <button type="submit" name="login">Login</button>
    </form>

    <div class="footer">
        © <?= date('Y'); ?> Admin Panel
    </div>
</div>

</body>
</html>
