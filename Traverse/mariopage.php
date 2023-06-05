<?php

    include("connection.php");
    session_start();
    $username = $_SESSION['name'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Traverse</title>
    <link rel="stylesheet" href="style/mario.css">
    <script src="js/sweetalert.min.js"></script>
</head>
<body>

    <section id="header">
        <a href="homepage.php"><img src="images/logo/logo.png" class="logo"></a>
        <div>
            <ul id="navbar">
                <li><a href="homepage.php">Home</a></li>
                <li><a href="userpage.php"><?php echo $username ?></a></li>
            </ul>
        </div>
    </section>

    <section id="evil">
        <h1>Super Mario Bros</h1>
        <p>The story of The Super Mario Bros. on their journey through the Mushroom Kingdom.<br>
        The Super Mario Bros.Movie stars share their competitive sides designs with you.</p>
        <h2>2023 &#8226; PG &#8226; 1h 32m &emsp; Adventure &#8226; Animation &#8226; Comedy &emsp; IMDb 7.3/10</h2>
    </section>

    <section id="moviedetails">
        <h1>About the movie</h1>

        <P>A Brooklyn plumber named Mario travels through the Mushroom Kingdom with a princess named 
            Peach and an anthropomorphic mushroom named Toad to find Mario's brother, Luigi, and to save 
            the world from a ruthless fire-breathing Koopa named Bowser.
        </P>

        <h1>Top Cast</h1>
        
        <div class="cast">
            <div class="actors">
                <img src="images/movies/mario/chris.png" alt="">
                <h4>Chris Pratt</h4>
                <p>Mario (voice)</p>
            </div>
            <div class="actors">
                <img src="images/movies/mario/anya.png" alt="">
                <h4>Anya Taylor-Joy</h4>
                <p>Princess Peach (voice)</p>
            </div>
            <div class="actors">
                <img src="images/movies/mario/charlie.png" alt="">
                <h4>Charlie Day</h4>
                <p>Luigi (voice)</p>
            </div>
            <div class="actors">
                <img src="images/movies/mario/charles.png" alt="">
                <h4>Charles Martinet</h4>
                <p>Mario's Dad (voice)</p>
            </div>
            <div class="actors">
                <img src="images/movies/mario/seba.png" alt="">
                <h4>Sebastian Maniscalco</h4>
                <p>Spike (voice)</p>
            </div>
        </div>

        <h1>Behind the movie</h1>
        
        <div class="dir">
            <h2>Director: </h2>
            <p> Aarvon Horvath &#8226; Michale Jelenic &#8226; Pierre Leduc</p>
        </div>

        <div class="wir">
            <h2>Writer: </h2>
            <p> Matthew Fogel</p>
        </div>

        <h1>Movie Posters</h1>

        <div class="posters">
            <img src="images/movies/mario/m1.jpg" alt="">
            <img src="images/movies/mario/m2.jpg" alt="">
            <img src="images/movies/mario/m3.jpg" alt="">
            <img src="images/movies/mario/m4.jpg" alt="">
            <img src="images/movies/mario/m5.jpg" alt="">
        </div>

    </section>
    
    <section id="book">
        <h1>Book your tickets</h1>
    </section>

    <section id = "details">

    <form method="POST">

        <div class="userdetails">
            <div class="inputbox">
                <label for="">Name</label>
                <input type="text" name = "name" placeholder="Full name" required>
            </div>

            <div class="inputbox">
                <label for="">Email</label>
                <input type="email" name = "email"  placeholder="example@gmail.com" required>
            </div>

            <div class="inputbox">
                <label for="">Phone</label>
                <input type="number" name = "phone"  placeholder="00000-00000" required>
            </div>
        </div>

        <div class="moviedetails">
            <div class="inputbox">
                <label for="">Theater</label>
                <select name="theater" class="utheater" id="theater">
                <option value=""></option>
                    <option value="Cinepolis Nexus Westend">Cinepolis Nexus Westend</option>
                    <option value="PVR ICON Pavillion Mall, Shivajinagar">PVR ICON Pavillion Mall, Shivajinagar</option>
                    <option value="INOX Elpro City Sqaure, Chinchwad">INOX Elpro City Sqaure, Chinchwad</option>
                    <option value="Carnival Premier Plaza">Carnival Premier Plaza</option>
                </select>
            </div>

            <div class="inputbox">
                <label for="">No. of Seats</label>
                <select name = "seat" id="seat">
                <option value=""></option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </div>

            <div class="inputbox">
                <label for="">Date & Time</label>
                <select name="date_time" class="udate_time" id="theater">
                <option value=""></option>
                    <option value="19 May 09.00 AM">19 May 09.00 AM</option>
                    <option value="19 May 12.45 PM">19 May 12.45 PM</option>
                    <option value="19 May 06.30 PM">19 May 06.30 PM</option>
                    <option value="19 May 09.45 PM">19 May 09.45 PM</option>
                    <option value="20 May 10.00 AM">20 May 10.00 AM</option>
                    <option value="20 May 01.30 PM">20 May 01.30 PM</option>
                    <option value="20 May 07.00 PM">20 May 07.00 PM</option>
                    <option value="20 May 10.00 PM">20 May 10.00 PM</option>
                </select>
            </div>
        </div>

        <div class="button">
            <input type="submit" name = "submit" value = "Book Now" class="btn">
            <input type="reset" value = "Cancle" class="btn2">
        </div>
        
    </form>

    </section>

    <footer>

        <img src="images/logo/traverse.png">
        <h3>Always To Give You The Best Screenplay</h3>
        <p><a href = "homepage.php">© Traverse.</a> &nbsp;All Rights Reserved</p>

    </footer>

</body>
</html>

<?php 
        include("connection.php");

        $username = $_SESSION['name'];

        if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $theater = $_POST['theater'];
        $seat = $_POST['seat'];
        $date_time = $_POST['date_time'];
    
        $query = "INSERT INTO booking (username, name, email, phone, movie, theater, seat, date_time) VALUES ('$username','$name', '$email', $phone, 'Super Mario Bros', '$theater', '$seat', '$date_time')";
    
        mysqli_query($conn, $query);
    
        if($query){
            ?>
                <script>
    
                    swal({
    
                        title: "Tickets Booked",
                        icon: "success",
                        button: "Ok",
    
                        });
    
                </script>
            <?php
            }
        }
?>