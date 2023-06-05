<?php

        include("connection.php");
    
        session_start();
        $username = $_SESSION['name'];

        $sql = "SELECT fullname FROM account WHERE username = '$username'";
        $lresult = mysqli_query($conn, $sql);
        $lrt = mysqli_fetch_array($lresult);

        $lename = $lrt['fullname'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Traverse</title>
    <link rel="stylesheet" href="style/user.css">
    <script src="js/sweetalert.min.js"></script>
    
</head>
<body>

    <section id="header">
        <a href="homepage.php"><img src="images/logo/logo.png" class="logo"></a>
        <div>
            <ul id="navbar">
                <li><a href="homepage.php">Home</a></li>
                <li><a class = "active" href="userpage.php"><?php echo $username ?></a></li>
            </ul>
        </div>
    </section>

    <section id = "userdetail">
        <div class="logo">
            <img src="images/user/user.png" alt="">
        </div>
        <div class="name">
            <h1>Hello, <?php echo $lename ?></h1>
            <p>hope you are doing good</p>
        </div>
    </section>

    <section id = "ticket">
        <h1>Your booked tickets</h1>
    </section>

    <div class="tabledetails">

        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Movie</th>
                    <th>Theater</th>
                    <th>No. of Seats</th>
                    <th>Date & Time</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php 
            $query = "SELECT * FROM booking WHERE username = '$username'";
            $query_run = mysqli_query($conn, $query);

            if (mysqli_num_rows($query_run) > 0) {
                foreach($query_run as $row)
                {
                    ?>
                        <tr>
                            <td><?php echo $row['name']?></td>
                            <td><?php echo $row['email']?></td>
                            <td><?php echo $row['phone']?></td>
                            <td><?php echo $row['movie']?></td>
                            <td><?php echo $row['theater']?></td>
                            <td><?php echo $row['seat']?></td>
                            <td><?php echo $row['date_time']?></td>
                            <td>
                                <form method="POST">
                                    <input type="hidden" name="email" value="<?php echo $row["email"]; ?>">
                                    <input style="background-color: red; color: white; border-style: none;font-size: 15px;padding: 5px 10px;
                                    font-weight: bold;cursor: pointer;"
                                    type="submit" name="submit" class="dbtn" value="Delete"></input>
                                </form>
                            </td>
                        </tr>
                    <?php
                }
            }

            else{
                ?>
                <tr>
                </tr>
                <?php
            }
        ?>
            </tbody>
        </table>
    </div>

    <div class="signout">
        <a href="loginpage.php"><img style="height: 80px; margin-left: 178vh; margin-bottom: 50px;" src="images/user/logout.png" alt=""></a>
    </div>

    <footer>

        <img src="images/logo/traverse.png">
        <h3>Always To Give You The Best Screenplay</h3>
        <p><a href = "homepage.php">© Traverse.</a> &nbsp;All Rights Reserved</p>

    </footer>

</body>
</html>

<?php

    include("connection.php");

    if(isset($_POST['submit'])){

        $email = $_POST['email'];

        $query = "DELETE FROM booking WHERE email = '$email'";

        mysqli_query($conn, $query);

        if($query){
            ?>
                <script>

                    swal({

                        title: "Deleted Successfully",
                        icon: "success",
                        button: "Ok",

                    }).then(function(){
                        window.location = "userpage.php"
                    });

                </script>
        <?php
        }
    }

?>