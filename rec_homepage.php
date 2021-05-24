<?php
    session_start();
    require 'dbconfig/config.php';
    
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- =====BOX ICONS===== -->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

        <!-- ===== CSS ===== -->
        <link rel="stylesheet" href="css/rec_homepagestyle.css">


        <title>E-Waste collector portal</title>

    </head>
    <body>
        <!--===== HEADER =====-->
        <header class="l-header">
        <nav class="nav bd-grid">
                <div>
                    <a href="#" class="nav__logo">Ewaste Management Portal</a>
                </div>
                
                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-menu'></i>
                </div>

                <div class="nav__menu" id="nav-menu">
                    <div class="nav__close" id="nav-close">
                        <i class='bx bx-x'></i>
                    </div>

                    <ul class="nav__list">
                        <li class="nav__item"><a href="rec_homepage.php" class="nav__link active">Home</a></li>
                        <li class="nav__item"><a href="#request" class="nav__link">Requests</a></li>
                        <li class="nav__item"><a href="rec_shipments.php" class="nav__link">Shipments</a></li>
                        <li class="nav__item"><a href="logout.php" class="nav__link">Logout</a></li>
                    </ul>
                </div>
            </nav>
        </header>



        <main class="l-main">
            <!--===== HOME =====-->
            <section class="home" id="home">
                <div class="home__container bd-grid">
                    <div class="home__img">
                        <img src="img/img1.png" alt="" data-speed="-2" class="move">
                        <img src="img/img2.png" alt="" data-speed="2" class="move">
                        <img src="img/img3.png" alt="" data-speed="2" class="move">
                        <img src="img/img4.png" alt="" data-speed="-2" class="move">
                        <img src="img/img5.png" alt="" data-speed="-2" class="move">
                    </div>

                    <div class="home__data">
                        <h1 class="home__title">Welcome<br> to E-Waste <br> Recycler portal</h1>
                        <p class="home__description">Communicate with Local collectors <br> and track incoming ewaste<br>shipments</p>
                        <a href="#request" class="home__button">Collection Requests</a>
                        <a href="rec_shipments.php" class="home__button">Incoming Shipment details</a>
                    </div>
                </div>
                <div id="request">
                    <center><h1 style="color:white;">Available Requests</h1></center>
                    <br>
                    <table>
                        <tr>
                            <th>Request ID</th>
                            <th>Collector Name</th>
                            <th>Description</th>
                        </tr>
                        <?php
                            $query1="Select * from request where status=0";
                            $res1=mysqli_query($con,$query1);
                            while($rows=$res1->fetch_assoc()){
                                ?>
                            <tr>
                            <td>
                                <?php
                                    $val=$rows['req_id'];
                                    echo $rows['req_id'];
                                ?>
                            </td>
                            <td>
                                <?php
                                    $x=$rows['collector_id'];
                                    $query2="Select collector_name from collectors where username= '$x'";
                                    //echo $rows['collector_id'];
                                    $res2=mysqli_query($con,$query2);
                                    $row2=$res2->fetch_assoc();
                                    echo $row2['collector_name'];
                                ?>
                            </td>
                            <td>
                                <?php
                                    echo $rows['Description'];
                                ?>
                            </td>
                            <td>
                                <button onclick="window.open('updatestatus.php?id=<?php echo $val ?>')">Accept</button>
                            </td>
                            </tr>
                            <?php } ?>
                    </table>
                </div>
            </section>    
        </main>



        <!--===== GSAP =====-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>

        <!--===== MAIN JS =====-->
        <script src="js/col_js.js"></script>
    </body>
</html>