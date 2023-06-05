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
    <link rel="stylesheet" href="style/home.css">
    <script src="js/sweetalert.min.js"></script>
    
</head>
<body>

    <section id="header">
        <a href="homepage.php"><img src="images/logo/logo.png" class="logo"></a>
        <div>
            <ul id="navbar">
                <li><a class="active" href="#">Home</a></li>
                <li><a href="userpage.php"><?php echo $username ?></a></li>
            </ul>
        </div>
    </section>

    <section id="evil">
        <h1>Evil Dead Rise</h1>
        <p>A twisted tale of two estranged sisters whose reunion is cut short by the rise of flesh-possessing demons,<br>
            thrusting them into a primal battle for survival as they face the most nightmarish version of family imaginable.
        </p>
        <h2>#1 Trending  &emsp; 2023 &#8226; R &#8226; 1h 36m &emsp; Horror &#8226; Fantasy &emsp; IMDb 7.1/10</h2>
    </section>

    <section id="trending">
        <h1>Trending Now</h1>
    </section>

    <section id="trendmovies" class="trendm1">

        <div class="trend">
            <img src="images/movies/home/johnwick4.jpg" alt="">
            <h4><a style="color: black;" onclick="return confirm2()" href = "#mid">John Wick Chapter 4</a></h4>
        </div>
        <div class="trend">
            <img src="images/movies/home/mario.jpg" alt="">
            <h4><a style="color: black;" href="mariopage.php" >Super Mario Bros</a></h4>
        </div>
        <div class="trend">
            <img src="images/movies/home/creed3.jpg" alt="">
            <h4><a style="color: black;" onclick="return confirm2()" href = "#mid">Creed III</a></h4>
            <script>

                function confirm2() {
                    swal({
                            title: "Content Warning",
                            text: "This movie has been rated 'A' and is for auidences above the age of 18. Please carry a valid ID/age proof in theater",
                            icon: "warning",
                            dangerMode: true,
                            buttons: true,
                        })
                        .then((willDelete) => {
                            if(willDelete){
                                window.location = "creedpage.php"
                            }

                            else {
                            }
                        });
                    }

                </script>
        </div>
        <div class="trend">
            <img src="images/movies/home/suzume.jpg" alt="">
            <h4>Suzume no Tojimari</h4>
        </div>

    </section>

    <section id="banner" class="banner1">

        <h2>Hands On Deck</h2>
        <h6>Never Miss The Latest & Trending Movies</h6>

    </section>

    <section id="banner2">

        <div class="bannerbox">
            <h2>Avatar 2<br>#1 Animation Movie</h2>
        </div>
        
        <div class="bannerbox2">
            <h2>65<br>#1 Sci-Fi Movie</h2>
        </div>

    </section>

    <footer>

        <img src="images/logo/traverse.png">
        <h3>Always To Give You The Best Screenplay</h3>
        <p><a href = "homepage.php">© Traverse.</a> &nbsp;All Rights Reserved</p>

    </footer>

</body>
</html>