<?php
/**
 * Created by PhpStorm.
 * User: Paja
 * Date: 28.6.2015
 * Time: 12:54
 */

?>


<html>

<head>
    <title> Friendster </title>
    <link rel="stylesheet" type="text/css" href="css/index.css"/>
</head>

<body>

    <div id="wrapper">

        <div id="header">
            <h1>Hi, welcome to Friendster!</h1>
        </div>
        <div id="content">
            <div id="login">
                <form action="login.php" method="post">
                    <fieldset>
                        <legend>Login</legend>
                        Email:<br>
                        <input name="email" type="text" id="email" size="30"/>
                        <br>
                        Password:<br>
                        <input name="password" type="password" id="password" size="30 "/>
                        <br>
                        <input name="submit" type="submit" value="Submit"/>
                        <br>
                    </fieldset>
                </form>
            </div>

            <div id="register">
                <form action="register.php" method="post">
                    <fieldset>
                        <legend>Register</legend>
                        First name:<br>
                        <input name="firstname" type="text" id="firstname" size="30"/>
                        <br>
                        Last name:<br>
                        <input name="lastname" type="text" id="lastname" size="30"/>
                        <br>
                        Email:<br>
                        <input name="email" type="text" id="email" size="30"/>
                        <br>
                        Password:<br>
                        <input name="password" type="password" id="password" size="30 "/>
                        <br>
                        Re-enter password:<br>
                        <input name="repassword" type="password" id="repassword" size="30 "/>
                        <br>
                        <input name="submit" type="submit" value="Submit"/>
                        <br>
                    </fieldset>
                </form>
            </div>
        </div>
        <div id="footer">
            <h3>Copyright © Stefan Pribicevic </h3>
        </div>

    </div>
</body>

</html>

