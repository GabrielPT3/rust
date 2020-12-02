<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Nerko+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/navbar/navbar.css">
    <link rel="stylesheet" href="css/footer/footer.css">
    <link rel="stylesheet" href="css/homepage/homepage.css">
    <title>Rust</title>
</head>
<body>

    

    <div class="homepageimg">
    <div id="navbar" class="navbar navbarfrontpage">
        <div class="navbaritems">
            <a href="/"><img src="imgs/logo.svg" alt="Rust"></a>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="crafting.php">Crafting</a></li>
                <li><a href="https://store.steampowered.com/app/252490/Rust/">Steam</a></li>
            </ul>
            <a class="mobilenavbaricon" href="javascript:void(0)" onclick="mobileNavbarToogle();"><i class="fas fa-bars fa-2x navico"></i></a>
        </div>
        <div id="mobilenavbaritems" class="mobilenavbaritems">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="crafting.php">Crafting</a></li>
                    <li><a href="https://store.steampowered.com/app/252490/Rust/">Steam</a></li>
                </ul>
        </div>
    </div>
        <div class="darkdiv">
                 
        </div>
        <div class="texthomepage">
                <h2>SURVIVE, COOPERATE & RAID</h2>
                <p>Everything wants you to die. You need to find food, shelter and weapons to prevent it.</p>  
        </div>
    </div>


    <div class="content">



        <div class="craftingdiv">
            <div class="craftingbox">
                <img src="imgs/craftingicon.png" alt="Crafting">
                <h3>CRAFTING</h3>
                <p>
                Crafting is a process of turning materials into a usable item.
                To access the crafting menu, press Q by default.
                </p>
                <br><br>
                <a href="crafting.php">View More</a>
            </div>
        </div>

        <br><br><br><br><br><br>

    </div>

    <div class="youtubediv">
            <h2>Last Updates</h2>
            <br><br>
            <div id="youtube-embed" class="youtube-embed">
            <iframe 
                width="1280" 
                height="720" 
                src="https://www.youtube.com/embed/Pg-QoRF6bq4" 
                frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                allowfullscreen>
            </iframe>
            </div>
        </div>

    <div class="footer">
        <p>© 2020 Gabriel Nunes. All rights reserved.</p>
    </div>


    <script src="js/navbar.js"></script>
    <script src="js/mobilenavbar.js"></script>
    <!-- Load the Twitch embed script -->
    <!-- <script src="https://embed.twitch.tv/embed/v1.js"></script> -->
    <!-- <script src="js/twitch.js"></script> -->

</body>
</html>