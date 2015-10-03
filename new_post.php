<?php
/**
 * Created by PhpStorm.
 * User: Paja
 * Date: 1.7.2015
 * Time: 16:52
 */

session_start();
include('config_db.php');

$owner = $_SESSION['email'];
$post = $_POST['post'];
$time = date("Y-m-d H:i:s");

$query = "INSERT INTO post (owner,post,time) VALUES ('$owner','$post','$time')";
$result = mysqli_query($mysqli,$query);

mysqli_close($mysqli);

header('Location: posts.php');


?>