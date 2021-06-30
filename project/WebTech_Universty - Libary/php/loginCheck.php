<?php


    session_start();

    $existingdata = file_get_contents('data.json');
    $tempJSONdata = json_decode($existingdata,true);

    foreach($tempJSONdata as $temp)
    {
        
        
        if($temp['user_name'] == $_POST['user_name'] &&  $temp['password'] == $_POST['password'])
        {

            
 

            unset($_SESSION["login_msg"]);
            $_SESSION["name"] = $temp['firstName'].' '. $temp['lastName'];

            if(isset($_POST['logche']))
            {
                setcookie('loginstatus', 'true', time()+60*60*10,'/');
            }
            header("Location: ../view/libary/dashboard.php");
            exit;
        }

    }

    $_SESSION["login_msg"] = 'Username or password is wrong';
    header("Location: ../view/login.php");

?>