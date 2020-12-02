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
    <link rel="stylesheet" href="css/crafting/crafting.css">
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
    <h1>Crafting</h1>
    <br><br><br><br>

    <div class="filtersdiv">
        <a class="filter" href="javascript:void(0)" onclick="scrollto('weapons')">Weapons</a>
        <a class="filter" href="javascript:void(0)" onclick="scrollto('construction')">Construction</a>
        <a class="filter" href="javascript:void(0)" onclick="scrollto('items')">Items</a>
        <a class="filter" href="javascript:void(0)" onclick="scrollto('clothing')">Clothing</a>
        <a class="filter" href="javascript:void(0)" onclick="scrollto('tools')">Tools</a>
        <a class="filter" href="javascript:void(0)" onclick="scrollto('medicals')">Medicals</a>
        <a class="filter" href="javascript:void(0)" onclick="scrollto('ammo')">Ammo</a>
        <a class="filter" href="javascript:void(0)" onclick="scrollto('traps')">Traps</a>
        <a class="filter"href="javascript:void(0)" onclick="scrollto('misc')">Misc</a>
    </div>

    <br><br><br>

    <h2 id="weapons">Weapons</h2>
    <hr>
    <div class="itemsdiv">

        <?php 
            foreach ($Items['weapons'] as $item){
        ?>
        <div class="itembox">
            <img src="<?php echo $item['img'] ?>" alt="<?php echo $item['name'] ?>">
            <h2><?php echo $item['name'] ?></h2>
            <p><?php echo substr ( $item['desc'], 0, 100); ?>...</p>
            <br>
            <a href="singleitem.php?category=weapons&id=<?php echo $item['id']; ?>">View More</a>  
        </div>
        <?php } ?>


    </div>

    <h2 id="construction">Construction</h2>
    <hr>
    <div class="itemsdiv">


        <?php 
                foreach ($Items['construction'] as $item){
            ?>
            <div class="itembox">
                <img src="<?php echo $item['img'] ?>" alt="<?php echo $item['name'] ?>">
                <h2><?php echo $item['name'] ?></h2>
                <p><?php echo substr ( $item['desc'], 0, 100); ?>...</p>
                <br>
                <a href="singleitem.php?category=construction&id=<?php echo $item['id']; ?>">View More</a>  
            </div>
        <?php } ?>


    </div>

    <h2 id="items">Items</h2>
    <hr>
    <div class="itemsdiv">
            <?php 
                foreach ($Items['items'] as $item){
            ?>
                <div class="itembox">
                    <img src="<?php echo $item['img'] ?>" alt="<?php echo $item['name'] ?>">
                    <h2><?php echo $item['name'] ?></h2>
                    <p><?php echo substr ( $item['desc'], 0, 100); ?>...</p>
                    <br>
                    <a href="singleitem.php?category=items&id=<?php echo $item['id']; ?>">View More</a>  
                </div>
            <?php } ?>
    </div>

    <h2 id="clothing">Clothing</h2>
    <hr>
    <div class="itemsdiv">
            <?php 
                foreach ($Items['clothing'] as $item){
            ?>
                <div class="itembox">
                    <img src="<?php echo $item['img'] ?>" alt="<?php echo $item['name'] ?>">
                    <h2><?php echo $item['name'] ?></h2>
                    <p><?php echo substr ( $item['desc'], 0, 100); ?>...</p>
                    <br>
                    <a href="singleitem.php?category=clothing&id=<?php echo $item['id']; ?>">View More</a>  
                </div>
            <?php } ?>
    </div>
    


    <h2 id="tools">Tools</h2>
    <hr>
    <div class="itemsdiv">
            <?php 
                foreach ($Items['tools'] as $item){
            ?>
                <div class="itembox">
                    <img src="<?php echo $item['img'] ?>" alt="<?php echo $item['name'] ?>">
                    <h2><?php echo $item['name'] ?></h2>
                    <p><?php echo substr ( $item['desc'], 0, 100); ?>...</p>
                    <br>
                    <a href="singleitem.php?category=tools&id=<?php echo $item['id']; ?>">View More</a>  
                </div>
            <?php } ?>
    </div>
    



    <h2 id="medicals">Medicals</h2>
    <hr>
    <div class="itemsdiv">
            <?php 
                foreach ($Items['medicals'] as $item){
            ?>
                <div class="itembox">
                    <img src="<?php echo $item['img'] ?>" alt="<?php echo $item['name'] ?>">
                    <h2><?php echo $item['name'] ?></h2>
                    <p><?php echo substr ( $item['desc'], 0, 100); ?>...</p>
                    <br>
                    <a href="singleitem.php?category=medicals&id=<?php echo $item['id']; ?>">View More</a>  
                </div>
            <?php } ?>
    </div>


    
    <h2 id="ammo">Ammo</h2>
    <hr>
    <div class="itemsdiv">
            <?php 
                foreach ($Items['ammo'] as $item){
            ?>
                <div class="itembox">
                    <img src="<?php echo $item['img'] ?>" alt="<?php echo $item['name'] ?>">
                    <h2><?php echo $item['name'] ?></h2>
                    <p><?php echo substr ( $item['desc'], 0, 100); ?>...</p>
                    <br>
                    <a href="singleitem.php?category=ammo&id=<?php echo $item['id']; ?>">View More</a>  
                </div>
            <?php } ?>
    </div>



    <h2 id="traps">Traps</h2>
    <hr>
    <div class="itemsdiv">
            <?php 
                foreach ($Items['traps'] as $item){
            ?>
                <div class="itembox">
                    <img src="<?php echo $item['img'] ?>" alt="<?php echo $item['name'] ?>">
                    <h2><?php echo $item['name'] ?></h2>
                    <p><?php echo substr ( $item['desc'], 0, 100); ?>...</p>
                    <br>
                    <a href="singleitem.php?category=traps&id=<?php echo $item['id']; ?>">View More</a>  
                </div>
            <?php } ?>
    </div>




    <h2 id="misc">Misc</h2>
    <hr>
    <div class="itemsdiv">
            <?php 
                foreach ($Items['misc'] as $item){
            ?>
                <div class="itembox">
                    <img src="<?php echo $item['img'] ?>" alt="<?php echo $item['name'] ?>">
                    <h2><?php echo $item['name'] ?></h2>
                    <p><?php echo substr ( $item['desc'], 0, 100); ?>...</p>
                    <br>
                    <a href="singleitem.php?category=misc&id=<?php echo $item['id']; ?>">View More</a>  
                </div>
            <?php } ?>
    </div>


    </div>



    <div class="footer">
        <p>© 2020 Gabriel Nunes. All rights reserved.</p>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="js/scrollto.js"></script>               
    <script src="js/navbar.js"></script>
    <script src="js/mobilenavbar.js"></script>
    
    
</body>
</html>