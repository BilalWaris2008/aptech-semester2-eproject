<?php

session_start();

// User Login Check

if (!isset($_SESSION['user_id'])) {
    header("Location: ../auth/login.php");
    exit();
}

// Admin Check

if ($_SESSION['user_role'] != 'admin') {
    header("Location: ../index.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>

</head>

<body>

    <h1>
        Welcome Admin
    </h1>

</body>

</html>