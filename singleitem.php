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
    <link rel="stylesheet" href="css/singleitem/singleitem.css">
    <title>Rust</title>
    <!-- PHP Includes -->
    <?php include 'craftingdb/items.php';?>
</head>
<body>

    <div id="navbar" class="navbar">
        <div class="navbaritems">
            <a href="/"><img src="imgs/logo.svg" alt="Rust"></a>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="crafting.php">Crafting</a></li>
                <li><a href="https://store.steampowered.com/app/252490/Rust/">Steam</a></li>
            </ul>
            <a class="mobilenavbaricon" href="javascript:void(0)" onclick="mobileNavbarToogle();"><i class="fas fa-bars fa-2x navicomobile"></i></a>
        </div>
        <div id="mobilenavbaritems" class="mobilenavbaritems">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="crafting.php">Crafting</a></li>
                    <li><a href="https://store.steampowered.com/app/252490/Rust/">Steam</a></li>
                </ul>
        </div>
    </div>


    <div class="content">
        <h2><?php echo $Items[$_GET['category']][$_GET['id']]['name']; ?></h2> 
        <div class="itembox">
            <div class="description">
                <p><?php echo $Items[$_GET['category']][$_GET['id']]['desc']; ?></p>
            </div>
            <img src="<?php echo $Items[$_GET['category']][$_GET['id']]['img']; ?>" alt="<?php echo $Items[$_GET['category']][$_GET['id']]['img']; ?>">
        </div>

        <div class="materialsdiv">
            <h3>Materials</h3>
            <div class="materialsbox">
                <?php 
                    foreach ($Items[$_GET['category']][$_GET['id']]['ingredients'] as $item){
                ?>
                <div class="material">
                        <b><?php echo $item['material'] ?>:</b> <?php echo $item['quantity'] ?>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>


    <div class="footer">
        <p>© 2020 Gabriel Nunes. All rights reserved.</p>
    </div>


    <script src="js/navbar.js"></script>
    <script src="js/mobilenavbar.js"></script>
    
</body>
</html>