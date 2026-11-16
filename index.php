<?php

    session_start();

        if (isset($_SESSION['email_found'])) {
            if ($_SESSION['email_found']) {
                echo "Email found.";
            } else {
                echo "Email not found.";
            }
        }
?>


    <html>
        <head>
            <title>Email Search</title>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="css/style.css">

            <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous"> -->

            <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
        </head>
        <body>
            <form method="post" action="check.php">
                <input type="text" name="email">
                <button type="submit" class="bg-red-500 p-2 rounded">Search</button>
            </form>
                <button type="submit" class="btn btn-secondary">Search</button>
                <button type="submit" class="btn btn-success">Search</button>
                <button type="submit" class="btn btn-danger">Search</button>
        </body>
    </html>