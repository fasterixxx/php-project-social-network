<?php
/**
 * Created by PhpStorm.
 * User: Paja
 * Date: 28.6.2015
 * Time: 17:18
 */

session_start();
include('config_db.php');
if(isset($_POST['submit'])){

    $test = true;

    if($_POST['firstname'] == ''){
        $_SESSION['error']['firstname'] = "First name is required";
        echo $_SESSION['error']['firstname'];
        $test = false;
    }

    if($_POST['lastname'] == ''){
        $_SESSION['error']['lastname'] = "Last name is required";
        echo $_SESSION['error']['lastname'];
        $test = false;
    }

    if($_POST['email'] == ''){
        $_SESSION['error']['email'] = "Email is required";
        echo $_SESSION['error']['email'];
        $test = false;
    }
    else {
        if(preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9._-]+)+$/", $_POST['email'])){
            $email= $_POST['email'];
            $sql1 = "SELECT * FROM user WHERE email = '$email'";
            $result1 = mysqli_query($mysqli,$sql1) or die();
            if (mysqli_num_rows($result1) > 0) {
                $_SESSION['error']['email'] = "This Email is already used.";
                echo $_SESSION['error']['email'];
                $test = false;
            }
        }
        else {
            $_SESSION['error']['email'] = "Your email is not valid.";
            echo $_SESSION['error']['email'];
            $test = false;
        }
    }

    if($_POST['password'] == ''){
        $_SESSION['error']['password'] = "Password is required";
        echo $_SESSION['error']['password'];
        $test = false;
    }

    if($_POST['password'] != $_POST['repassword']){
        $_SESSION['error']['password'] = "Passwords do not match";
        echo $_SESSION['error']['password'];
        $test = false;
    }

    if($test == true){
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $password = $_POST['password'];

       // $sql2 = "INSERT INTO user (first_name, last_name, email, password) VALUES ('$firstname', '$lastname',''$email', '$password')";

        $sql2 = "INSERT INTO user (first_name, last_name, email, password)
        VALUES ('$firstname','$lastname','$email','$password')";

        $result2 = mysqli_query($mysqli,$sql2) or die("Error");

        header("Location: posts.php");
    }

}

?>