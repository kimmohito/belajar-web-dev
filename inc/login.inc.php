<?php

    include 'db.php';

    if(isset($_POST['login'])){

        $email = mysqli_real_escape_string($db, $_POST['email']);
        $password = $_POST['password'];

        $query = "SELECT * FROM users WHERE user_email = '$email' LIMIT 1";
        $result = mysqli_query($db, $query);
        $count = mysqli_num_rows($result);

        if($count === 0){
            $_SESSION['error'] = "Invalid email or password.";
            header('Location: ../login');
            exit();
        }

        $user = mysqli_fetch_assoc($result);

        if(password_verify($password, $user['user_password'])){
            session_regenerate_id(true);
            $_SESSION['user_email'] = $user['user_email'];
            unset($_SESSION['error']);
            header('Location: ../');
            exit();
        } else {
            $_SESSION['error'] = "Invalid email or password.";
            header('Location: ../login');
            exit();
        }

    }

    header('Location: ../login');
    exit();

?>
