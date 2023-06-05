<?php

    include("connection.php");
    session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Traverse</title>
    <link rel="stylesheet" href="style/login.css">
    <script src="js/sweetalert.min.js"></script>
    
</head>
<body>
    <div class="image">
        <img src="images/logsign/login.jpg" alt="">
    </div>

    <div class="login">
        <h1>Welcome back !</h1>
        <p>You've been missed</p>

        <form method="POST">
            <div class="inputbox">
                <input type="text" name = "name" placeholder="Username" required>
            </div>
            <div class="inputbox">
                <input type="password" name = "pass" placeholder="Password" required>
            </div>
            <div class="btnandnew">
                <input type="submit" name = "submit" value="Login" class="btn">
                <p>New to Traverse ? <a style="text-decoration: none;" href="signuppage.php">Sign Up</a></p>
            </div>
        </form>
    </div>
</body>
</html>

<?php
    include("connection.php");
    if(isset($_POST['submit'])){

        $username = $_POST['name'];
        $password = $_POST['pass'];

        $sql = "SELECT * FROM account WHERE username = '$username' AND password = '$password'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);

        if($count==1){

            $_SESSION['name'] = $username;
            var_dump($_SESSION);

            header("Location:homepage.php");
        }

        else{
            ?>
                <script>

                    swal({

                        icon: "error",
                        title: "Invalid credentials",
                        text: "Please enter valid username & password",
                        button: "Try again",

                    });

                </script>
        <?php
        }
    }
?>