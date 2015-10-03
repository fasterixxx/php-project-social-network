<?php
/**
 * Created by PhpStorm.
 * User: Paja
 * Date: 28.6.2015
 * Time: 17:51
 */

session_start();
include('config_db.php');

?>

<html>

<head>
    <title> Posts </title>
    <link rel="stylesheet" type="text/css" href="css/member.css"/>
</head>

<body>
    <div id="wrapper">
        <div id="header">
            <h1>FRIENDSTER</h1>
        </div>
        <div id="content">
            <div id="menu">
                <ul>
                    <li><a href="posts.php">posts</a></li>
                    <li><a href="messages.php">messages</a></li>
                    <li><a href="friends.php">friends</a></li>
                    <li><a href="profile.php">profile</a></li>
                    <li><a href="sign_out.php">sign out</a></li>
                </ul>
            </div>
        </div>
        <div id="footer">
            <h4>Copyright © Stefan Pribicevic </h4>
        </div>
    </div>
</body>

</html>