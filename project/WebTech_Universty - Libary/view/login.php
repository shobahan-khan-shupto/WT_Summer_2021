<?php

if (isset($_COOKIE['loginstatus'])) {
    header("Location: libary/dashboard.php");
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>

    <h1>Log In</h1>
    <br>
    <br>
    <br>

    <form method='POST' action="../php/logincheck.php">
            <table align="center">
                <tr>
                    <td>User-Name:</td>
                    <td><input type="text" name="user_name" id=""></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input type="password" name="password" id=""></td>
                </tr>
                


                <tr>
                    <hr>
                    <td colspan="2"> <input type="checkbox" name="logche" id=""> Remember me</td>
                </tr>

                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value='Submit'>
                        <a href="forgetpassword.php">Forget Password</a>

                    </td>
                </tr>
            </table>
        </form>

    <br>
    <br>
    <br>
    <h1><a href="../index.php">Back</a></h1>
    <center>
        <?php

        session_start();

        if (isset($_SESSION["login_msg"]))
            echo $_SESSION["login_msg"]
        ?>
    </center>

</body>

</html>