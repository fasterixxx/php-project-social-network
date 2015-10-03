<?php
/**
 * Created by PhpStorm.
 * User: Paja
 * Date: 28.6.2015
 * Time: 17:51
 */

session_start();
include('config_db.php');
$email = $_SESSION['email'];

?>

<html>

<head>
    <title> Friends </title>
    <link rel="stylesheet" type="text/css" href="css/member.css"/>
    <link rel="stylesheet" type="text/css" href="css/friends.css"/>
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
        <div id="lists">
            <div id="friends">
                <h2 class="list_header">my friends</h2>
                <?php
                    $query_find_friends = "SELECT * FROM friendship WHERE friend1='$email'";
                    $result = mysqli_query($mysqli,$query_find_friends) or die();
                    while($row = mysqli_fetch_array($result)){
                        $email = $row['friend2'];
                        $query_find_user = "SELECT * FROM user WHERE email='$email'";
                        $result1 =  mysqli_query($mysqli,$query_find_user) or die();
                        $user = mysqli_fetch_array($result1);
                        echo "<div class='friends_item'><img src='images/".$user['profile_picture']."' width='80' height='80'>   ".$user['first_name']."  ".$user['last_name']."</div>";
                    }

                ?>
            </div>
        </div>
    </div>
    <div id="footer">
        <h4>Copyright © Stefan Pribicevic </h4>
    </div>
</div>
</body>

</html>