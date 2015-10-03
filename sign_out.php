<?php
/**
 * Created by PhpStorm.
 * User: Paja
 * Date: 29.6.2015
 * Time: 19:11
 */

session_start();
unset($_SESSION['user_name']);
header('Location: index.php');

?>