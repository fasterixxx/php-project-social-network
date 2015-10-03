<?php
/**
 * Created by PhpStorm.
 * User: Paja
 * Date: 28.6.2015
 * Time: 19:20
 */

session_start();
include("config_db.php");
if(isset($_POST['submit'])){

    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    $query = "SELECT * FROM user WHERE email='$email' AND password='$password'";
    $result = mysqli_query($mysqli,$query)or die();
    $num_row = mysqli_num_rows($result);
    $row=mysqli_fetch_array($result);

    if( $num_row ==1 ) {
        $_SESSION['email']=$row['email'];
        header("Location: posts.php");
        exit;
    }
    else {
        echo 'false';
    }
}

?>