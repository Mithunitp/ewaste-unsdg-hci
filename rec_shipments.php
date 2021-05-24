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
                        <li class="nav__item"><a href="rec_homepage.php" class="nav__link">Home</a></li>
                        <li class="nav__item"><a href="#requests" class="nav__link">Requests</a></li>
                        <li class="nav__item"><a href="#rec_shipments" class="nav__link active">Shipments</a></li>
                        <li class="nav__item"><a href="logout.php" class="nav__link">Logout</a></li>
                    </ul>
                </div>
            </nav>
        </header>



        <main class="l-main">
            <!--===== HOME =====-->
            <section class="home" id="home">
                <div class="home__container bd-grid">
                  <!--   <div class="home__img">
                        <img src="img/img1.png" alt="" data-speed="-2" class="move">
                        <img src="img/img2.png" alt="" data-speed="2" class="move">
                        <img src="img/img3.png" alt="" data-speed="2" class="move">
                        <img src="img/img4.png" alt="" data-speed="-2" class="move">
                        <img src="img/img5.png" alt="" data-speed="-2" class="move">
                    </div> -->

                    <div class="home__data">
                        <h2 class="home__title2">Track your incoming shipments of E-waste</h2>
                        <table>
                            <tr>
                                <th>Shipment ID</th>
                                <th>Collector Name</th>
                                <th>Description</th>
                                <th>Vehicle NO</th>
                                <th>Driver Name</th>
                                <th>Driver NO</th>
                            </tr>
                            <?php
                                $u=$_SESSION['username'];
                                $query1="Select * from shipment where recycler_id='$u'";
                                $res1=mysqli_query($con,$query1);
                                while($rows=$res1->fetch_assoc()){
                                    ?>
                                <tr>
                                <td>
                                    <?php
                                        echo $rows['shipment_id'];
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
                                        echo $rows['description'];
                                    ?>
                                </td>
                                <td>
                                    <?php
                                        echo $rows['vehicle_no'];
                                    ?>
                                </td>
                                <td>
                                    <?php
                                        echo $rows['driver_name'];
                                    ?>
                                </td>
                                <td>
                                    <?php
                                        echo $rows['driver_mno'];
                                    ?>
                                </td>
                                </tr>
                                <?php } ?>
                        </table>
                    </div>
                          
                </div>
            </section>
        </main>
    




        <!--===== GSAP =====-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>

        <!--===== MAIN JS =====-->
        <script src="js/rec_js.js"></script>
    </body>
</html>