<?php
    if(!empty($_POST['fullname']) && !empty($_POST['email']) && !empty($_POST['message'])) {
        $fullname = htmlspecialchars($_POST['fullname']);
        $email = htmlspecialchars($_POST['email']);
        $message = htmlspecialchars($_POST['message']);

        if (filter_var($email, FILTER_VALIDATE_EMAIL)){

        }else{
            echo "Email non valide";
        }
    }else{
        header('Location:../index.php');
        die();
    }