<?php

    session_start();

    include 'classes/user.class.php';
 

    if(isset($_SESSION['username'])!="") {
       /* header("Location: login.php");*/
    }

    if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if (!preg_match("/^[a-zA-Z0-9 ]+$/",$username)) {
            $username_error = "Name must contain only letters, numbers and space";
            goto phtml;
        }


        if(strlen($password) < 6) {
            $password_error = "Password must be minimum of 6 characters";
            goto phtml;
        }
        
        $user = new User;
        // $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $auth = $user->login($username, $password);
       
        if(($auth === false))
        {
            $auth_error = 'Incorrect username or Password!!!';
        } else 
        {
            session_start();
            $_SESSION['username'] = $auth['username'];
            
            header("Location: admine.php");
        }
    
      
    }

    phtml:
    include 'login.phtml';