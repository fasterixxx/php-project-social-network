<?php
/**
 * Created by PhpStorm.
 * User: Paja
 * Date: 29.6.2015
 * Time: 21:28
 */

session_start();
include("config_db.php");

$name = $_FILES['myfile']['name'];
$type = $_FILES['myfile']['type'];
$size = $_FILES['myfile']['size'];
$temp =  $_FILES['myfile']['tmp_name'];
$error =  $_FILES['myfile']['error'];

if($error > 0)
{
    die("Code $error.");
}
else
{
    move_uploaded_file($temp,"images/".$name);

    $query = mysqli_query($mysqli,"UPDATE user SET profile_picture='".$name."' WHERE email='".$_SESSION['email']."'");

    mysqli_close($mysqli);

    header('Location: profile.php');
}

?>