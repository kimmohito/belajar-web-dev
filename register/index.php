<html>
    <head>
        <title>Register</title>
    </head>
    <body>
        <form method="POST" action="../inc/register.inc.php">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <label for="password2">Confirm Password:</label>
            <input type="password" id="confirm_password" name="confirm_password" required>
            <button type="submit" name="register">Register</button>
        </form>
        <a href="../login">Already have an account? Login here</a>
        <?php
            session_start();
            if(isset($_SESSION['error'])){
                echo "<p style='color:red'>" . $_SESSION['error'] . "</p>";
                unset($_SESSION['error']);
            }
        ?>
    </body>
</html>

