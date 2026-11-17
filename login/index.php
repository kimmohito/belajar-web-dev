<?php
    session_start();
?>


<html>
    <head>
        <title>Login</title>
    </head>
    <body>
        <form method="POST" action="../inc/login.inc.php">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <button type="submit" name="login">Login</button>
        </form>
        <a href="../register">Don't have an account? Register here</a>
        <?php
            if(isset($_SESSION['error'])){
                echo "<p style='color:red'>" . htmlspecialchars($_SESSION['error'], ENT_QUOTES, 'UTF-8') . "</p>";
                unset($_SESSION['error']);
            }
            if(isset($_SESSION['success'])){
                echo "<p style='color:green'>" . $_SESSION['success'] . "</p>";
                unset($_SESSION['success']);
            }
        ?>
    </body>
</html>
