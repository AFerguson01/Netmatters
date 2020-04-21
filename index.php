<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include "all-pages/head.php"; ?>
        <!-- Title -->
        <title>Netmatters | Full Service Digital Agency | Norwich, Norfolk | Netmatters</title>

        
<!-- Style Sheet -->
<link rel="stylesheet" href="css/style.css">
    </head>
    
    <body>

        <!-- Pushy Menu -->
        <nav class="pushy pushy-right" data-focus="#first-link">
            <?php include "all-pages/sidenav.php"; ?>
        </nav>

        <!-- Site Overlay -->
        <div class="site-overlay"></div>

        <!-- Your Content -->
        <div id="container">

            <header>
                <?php include "all-pages/mainnav.php";  ?>
            </header>
            
            <div class="slick-carousel">
                <?php include "landing-page/carousel.php"; ?>
            </div>

            <div class="cards">
                <?php include "landing-page/cards.php"; ?>
            </div>

            <div class="banner">
                <?php include "landing-page/banner.php"; ?>
            </div>

            <div class="latest">
                <h3>Latest</h3>
                <div id="latest-underline"></div>
                <div class="articles">
                    <?php include "landing-page/articles.php"; ?>
                </div>
            </div>

            <div class="sponsors">
                <?php include "landing-page/sponsors.php"; ?>
            </div>

            <div class="footer">
                <?php include "all-pages/footer.php"; ?>
            </div>
            
            <div class="sponsors-2">
                <div class="sponsor-1">
                    <img src="img/2-sponsor-1.jpg" alt="Silver Microsoft Partner">
                </div>
                <div class="sponsor-2">
                    <img src="img/2-sponsor-2.jpg" alt="Future 50 Member">
                </div>
                <div class="sponsor-3">
                    <img src="img/2-sponsor-3.jpg" alt="QMS">
                </div>
                <div class="sponsor-4">
                    <img src="img/2-sponsor-4.jpg" alt="Norfolk Carbon Charter">
                </div>
            </div>

        </div>

        <?php include "all-pages/scripts.php"?>

    </body>
</html>
