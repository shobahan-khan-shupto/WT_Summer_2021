<?php



session_start();

function checkmail($email){
    if( filter_var ($email, FILTER_VALIDATE_EMAIL) ) 
    {
        return true;
    }
    else{
        return false;
    }
}
if (strlen($_POST['password']) > 3) {
    if (!empty($_POST['firstName']) && !empty($_POST['lastName'])) {
        if (!empty($_POST['user_name'])) {

            $checkemail = checkmail($_POST['email']);
            
            if ($checkemail==true) {

                $formdata = array(
                    'firstName' => $_POST["firstName"],
                    'lastName' => $_POST["lastName"],
                    'email' => $_POST["email"],
                    'user_name' => $_POST["user_name"],
                    'password' => $_POST["password"]
                );
                $existingdata = file_get_contents('data.json');
                $tempJSONdata = json_decode($existingdata);
                $usernameunique = json_decode($existingdata, true);
                foreach ($usernameunique as $unique) {
                    if ($unique['user_name'] == $_POST['user_name']) {
                        $_SESSION["reg_err"] = 'Existing Username';
                        header("Location: ../view/register.php");
                        exit;
                    }
                }


                unset($_SESSION["reg_err"]);
                $tempJSONdata[] = $formdata;
                //Convert updated array to JSON
                $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);

                //write json data into data.json file
                if (file_put_contents("data.json", $jsondata)) {
                    echo "Data successfully saved <br>";
                } else
                    echo "no data saved";

                $data = file_get_contents("data.json");
                $mydata = json_decode($data);
                header("Location: ../view/login.php");
            } else {
                $_SESSION["reg_err"] = 'email invalid';
                header("Location: ../view/register.php");
            }
        } else {
            $_SESSION["reg_err"] = 'Username is required';
            header("Location: ../view/register.php");
        }
    } else {
        $_SESSION["reg_err"] = 'First name and last name & email is required';
        header("Location: ../view/register.php");
    }
} else {

    $_SESSION["reg_err"] = 'Password must be 4 letters';
    header("Location: ../view/register.php");
}
