<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <title> ระบบจัดการทรัพย์สินภายในองค์กร </title>
    <link rel="stylesheet" type="text/css" href="bootstrap-3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style/stylesheet-compiled.css?<?php echo rand(0,999); ?>">
</head>

<body class="login">
    <div class="container">
        <!-- Modal Content -->
        <form class="modal-content animate" action="Mainpage.html">
            <div class="imgcontainer">
                <!--<img src="img/logo.png" alt="Avatar" class="avatar">-->
                <img src="img/logo.png">
            </div>
            
            <div class="imgcontainer">
                <img src="img/img_avatar.png" alt="Avatar" class="avatar">
            </div>



            <center>
                <label><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="uname" required>

                <label><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw" required>

                <button type="submit">Login</button>
                <input type="checkbox" checked="checked"> Remember me
            </center>



            <div class="container" style="background-color:#f1f1f1">
                <span class="reg"><a href="#">Register</a></span>
                <span class="psw">Forgot <a href="#">password?</a></span>
            </div>
            <br>
        </form>
    </div>
</body>


<script type="test/javascript" src="bootstrap-3.3.7/js/bootstrap.min.js"></script>

</html>