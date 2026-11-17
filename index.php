<?php
session_start();

$isLoggedIn = isset($_SESSION['user_email']);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Dashboard</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <h1>Dashboard</h1>
        <?php if ($isLoggedIn): ?>
            <p>You are logged in as <?= htmlspecialchars($_SESSION['user_email'], ENT_QUOTES, 'UTF-8') ?>.</p>
        <?php else: ?>
            <p>You are not logged in.</p>
            <a href="login/">Login</a>
            <a href="register/">Register</a>
        <?php endif; ?>
    </body>
</html>