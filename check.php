<?php

    session_start();

    $db = mysqli_connect("localhost", "root", "root", "ahatask");

    if (!$db) {
        die("Connection failed: " . mysqli_connect_error());
    }



    if (isset($_POST['email'])) {

        $email = $_POST['email'];
        $query = "SELECT * FROM users WHERE email = '$email'";
        $result = mysqli_query($db, $query);


        $_SESSION['email_found'] = (mysqli_num_rows($result) > 0);


    }


    mysqli_close($db);

    header("Location: /");

?>