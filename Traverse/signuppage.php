<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Traverse</title>
    <link rel="stylesheet" href="style/signup.css">
    <script src="js/sweetalert.min.js"></script>
</head>
<body>
    <div class="image">
        <img src="images/logsign/signup.jpg" alt="">
    </div>

    <div class="signup">
        <h1>Get Started !</h1>
        <p>Takes couple of seconds</p>

        <form method="POST">
            <div class="inputbox">
                <input type="text" name = "name" placeholder="Full name" required>
            </div>
            <div class="inputbox">
                <input type="text" name = "uname" placeholder="Username" required>
            </div>
            <div class="inputbox">
                <input type="password" name = "pass" placeholder="Password" required>
            </div>
            <div class="btnandnew">
                <input type="submit" name = "submit" value="Sign Up" class="btn">
                <p>Existing user ? <a style="text-decoration: none;" href="loginpage.php">Sign In</a></p>
            </div>
        </form>
    </div>
</body>
</html>

<?php

    include("connection.php");
    if(isset($_POST['submit'])){

        $fullname = $_POST['name'];
        $username = $_POST['uname'];
        $password = $_POST['pass'];

        $query = "INSERT INTO account (fullname, username, password) VALUES('$fullname', '$username', '$password')";

        mysqli_query($conn, $query);

        if($query){
            ?>
                <script>

                    swal({

                        title: "Registered Successfully",
                        icon: "success",
                        button: "Login",

                    }).then(function(){
                        window.location = "loginpage.php"
                    });

                </script>
        <?php
        }
    }

?>