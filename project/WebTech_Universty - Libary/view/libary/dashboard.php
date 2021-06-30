<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <center>
        <h1>Libary Dashboard</h1>
        <h1>Welcome <?php

                    session_start();

                    echo $_SESSION['name'];
                    ?></h1>
    </center>
    <a href="../../index.php">Home</a> ||
    <a href="">Manager</a> ||
    <a href="">Current Issued Biiks</a> ||
    <a href="">manage Books</a> ||
    <a href="../../php/logout.php">Log out</a>
</body>

</html>