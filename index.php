<?php session_start(); ?>

<html lang="en">
<head>
    <title>Form Login</title>

</head>
<body>
    <div class="konten">
        <div class="kepala">
            <div class="lock"></div>
            <h2 class="judul">Log In</h2>
        </div>

        <?php
        if(!empty($_SESSION["username"]) && !empty($_SESSION["password"])) {
            header("location:waktu.php");
        }
        ?>

        <div class="artikel">
            <form action="konfirmasi.php" method="post">
                <div class="grup">
                    <label for="username">Username</label><br>
                    <input type="text" placeholder="Input Username Anda" name="admin">
                </div><br>
                <div class="grup">
                    <label for="password">Password</label><br>
                    <input type="password" placeholder="input password Anda" name="password">
                </div><br>
                <div class="grup">
                    <input type="submit" value="Log In">
                </div>
            </form>
        </div>
    </div>
</body>
</html>
