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
    <title> Posts </title>
    <link rel="stylesheet" type="text/css" href="css/member.css">
    <link rel="stylesheet" type="text/css" href="css/posts.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/posts.js"></script>

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
        <div id="new_post">
            <form action="new_post.php" method="post" id="newpost">
                <input id="post_button" name="post" type="submit" value="POST"/>
            </form>
            <textarea rows="10" cols="50" name="post" form="newpost"></textarea>
        </div>
        <div id="posts">
            <?php
                $query_all_posts = "SELECT * FROM post";
                $result = mysqli_query($mysqli,$query_all_posts) or die();
                while($row = mysqli_fetch_array($result)){
                    $query_find_friends = "SELECT * FROM friendship WHERE friend1='$email'";
                    $result1 = mysqli_query($mysqli,$query_find_friends) or die();
                    while($row1 = mysqli_fetch_array($result1)) {
                        if($row['owner']==$row1['friend2']){
                            $email1 = $row1['friend2'];
                            $query_find_user = "SELECT * FROM user WHERE email='$email1'";
                            $result2 = mysqli_query($mysqli,$query_find_user) or die();
                            while($row2 = mysqli_fetch_array($result2)){
                                echo "<div class='post'><img src='images/".$row2['profile_picture']."' width='40' height='40'>   ".$row2['first_name']
                                    ."  ".$row2['last_name']."<br>".$row['post']."<br><br> ".$row['time']."</div>";
                            }

                        }
                    }

                }
            ?>
        </div>
    </div>
</div>
</body>

</html>