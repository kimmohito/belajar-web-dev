<?php

    include 'db.php';

    if(isset($_POST['register'])){

        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];

        $query = "SELECT * FROM users WHERE user_email = '$email'";
        $result = mysqli_query($db, $query);
        $count = mysqli_num_rows($result);

        if($count > 0){
            $_SESSION['error'] = "Email already exists!";
            header('Location: ../register');
            exit();
        }

        if($password !== $confirm_password){
            $_SESSION['error'] = "Passwords do not match!";
            header('Location: ../register');
            exit();
        }

        if($password === $confirm_password){
        
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            $query = "INSERT INTO users (user_email, user_password) VALUES ('$email', '$hashed_password')";

            if(mysqli_query($db, $query)){
                $_SESSION['success'] = "Registration successful!";
                header('Location: ../login');
                exit();
            } else {
                $_SESSION['error'] = "Registration failed!" . mysqli_error($db);
                header('Location: ../register');
                exit();
            }
        }

    }

?>