<?php

    session_start();

    $db = mysqli_connect("localhost", "root", "root", "belajarwebdev");

    if (!$db) {
        die("Connection failed: " . mysqli_connect_error());
    }