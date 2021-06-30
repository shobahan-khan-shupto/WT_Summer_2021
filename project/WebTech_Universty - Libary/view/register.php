<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>

<body>
    
        <h1>Register</h1>
        <br>
        <br>
        <br>

        <form action="../php/signinCheck.php" method="POST">
            First name:<br>
            <input type="text" name="firstName">
            <br><br />
            Last name:<br>
            <input type="text" name="lastName">
            <br><br>

            Email:<br>
            <input type="email" name="email">
            <br><br>

            User Name:<br>
            <input type="text" name="user_name">
            <br><br>

            Password:<br>
            <input type="password" name="password">
            <br><br>


            <input type="submit" value="Submit">
        </form>

        <br>
        <br>
        <br>
        <h1><a href="../index.php">Back</a></h1>
        <h1></h1>

    <center>
        <?php

        session_start();

        if (isset($_SESSION["reg_err"]))
            echo $_SESSION["reg_err"]
        ?>


    </center>

</body>

</html>