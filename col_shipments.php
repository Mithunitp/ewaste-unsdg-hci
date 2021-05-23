<?php
	session_start();
	require_once('dbconfig/config.php');
	//phpinfo();
    if(!isset($_SESSION['username']))
    {
    echo '<script>window.location="col_login.php"</script>';
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- =====BOX ICONS===== -->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

        <!-- ===== CSS ===== -->
        <link rel="stylesheet" href="css/col_homepagestyle.css">

        <title>E-Waste collector portal</title>
    </head>
    <body>
        <!--===== HEADER =====-->
        <header class="l-header">
        <nav class="nav bd-grid">
                <div>
                    <a href="#" class="nav__logo">E-Waste Management</a>
                </div>
                
                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-menu'></i>
                </div>

                <div class="nav__menu" id="nav-menu">
                    <div class="nav__close" id="nav-close">
                        <i class='bx bx-x'></i>
                    </div>

                    <ul class="nav__list">
                        <li class="nav__item"><a href="index.html" class="nav__link">Home</a></li>
                        <li class="nav__item"><a href="col_homepage.php" class="nav__link">Collector</a></li>
                        <li class="nav__item"><a href="col_requests.php" class="nav__link">Requests</a></li>
                        <li class="nav__item"><a href="col_shipments.php" class="nav__link active">Shipments</a></li>
                        <li class="nav__item"><a href="logout.php" class="nav__link">Logout</a></li>
                    </ul>
                </div>
            </nav>
        </header>

        <main class="l-main">
            <!--===== HOME =====-->
            <section class="home" id="home">
                <div class="home__container bd-grid">
                    <!--div class="home__img">
                        <img src="img/img1.png" alt="" data-speed="-2" class="move">
                        <img src="img/img2.png" alt="" data-speed="2" class="move">
                        <img src="img/img3.png" alt="" data-speed="2" class="move">
                        <img src="img/img4.png" alt="" data-speed="-2" class="move">
                        <img src="img/img5.png" alt="" data-speed="-2" class="move">
                    </div-->

                    <div class="home__data">
                        <h1 class="home__title">Welcome<br> to E-Waste <br> Collector portal</h1>
                        <p class="home__description">Communicate with State-level recyclers <br> and track E-Waste bins<br>in your pincode.</p>
                        <a href="#" class="home__button">Track Bins</a>
                        <a href="#" class="home__button">Specify Shipment details</a>
                        
                    </div>
                </div>
            </section>
        </main>

        <!--===== GSAP =====-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>

        <!--===== MAIN JS =====-->
        <script src="js/col_js.js"></script>
    </body>
</html>