<?php
/**
 * Created by PhpStorm.
 * User: Paja
 * Date: 28.6.2015
 * Time: 17:51
 */

session_start();
include('config_db.php');
$res=mysqli_query($mysqli,"Select * FROM user WHERE email='".$_SESSION['email']."'");
$image_info=mysqli_fetch_array($res);

?>

<html>

<head>
    <title> Profile </title>
    <link rel="stylesheet" type="text/css" href="css/member.css"/>
    <link rel="stylesheet" type="text/css" href="css/profile.css"/>
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
        <div id="profle">
            <div id="profile_image">
                <img src="images/<?php echo $image_info['profile_picture']; ?>" width="300" height="300"/></div>
            </div>
            <div id="button">
                <form method="POST" action="profile_upload_image.php" enctype="multipart/form-data">
                    <div><input class="button" type="file" name="myfile"></div>
                    <br>
                    <div><input class="button" type="submit" value="Upload"></div>
                </form>
        </div>
    </div>
    <div id="footer">
        <h4>Copyright © Stefan Pribicevic </h4>
    </div>
</div>
</body>

</html>