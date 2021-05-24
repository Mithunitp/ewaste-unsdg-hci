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
                        <li class="nav__item"><a href="col_homepage.php" class="nav__link active">Home</a></li>
                        <li class="nav__item"><a href="col_requests.php" class="nav__link">Requests</a></li>
                        <li class="nav__item"><a href="col_shipments.php" class="nav__link">Shipments</a></li>
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
                        <h1 class="home__title">Welcome<br> to E-Waste <br> Collector portal</h1>
                        <p class="home__description">Communicate with State-level recyclers <br> and track E-Waste bins<br>in your pincode.</p>
                        <a href="#bin" class="home__button">Track Bins</a>
                        <a href="#request" class="home__button">Check Request Status</a>
                        
                    </div>
                </div>
            </section>
        </main>
        <div id="bin" class="home__data">
        <center><h1>Bins</h1></center>
            <table>
                <tr>
                    <th>Bin ID</th>
                    <th>Location</th>
                    <th>Status</th>
                    <th>Access Code</th>
                </tr>
                <?php
                    $cp=$_SESSION['pin'];
                    $cs=$_SESSION['state'];
                    $query1="Select * from bin where bin_pin='$cp'";
                    $res1=mysqli_query($con,$query1);
                    while($rows=$res1->fetch_assoc()){
                        ?>
                    <tr>
                    <td>
                        <?php
                            echo $rows['bin_id'];
                        ?>
                    </td>
                    <td>
                        <?php
                            echo $rows['bin_loc'];
                        ?>
                    </td>
                    <td>
                        <?php
                            echo $rows['status'];
                        ?>
                    </td>
                    <td>
                        <?php
                            echo $rows['col_accesscode'];
                        ?>
                    </td>
                    </tr>
                    <?php } ?>
            </table>
        </div>
        <div id="request" class="home__data">
        <br><br><center><h1>Approved Requests</h1></center>
            <table>
                <tr>
                    <th>Request ID</th>
                    <th>Recycler ID</th>
                    <th>Recycler Name</th>
                    <th>Address</th>
                    <th>Status</th>
                </tr>
                <?php
                    $cid=$_SESSION['username'];
                    $query2="Select * from request where collector_id='$cid' and status=1";
                    $res2=mysqli_query($con,$query2);
                    while($rows2=$res2->fetch_assoc()){
                        ?>
                    <tr>
                    <td>
                        <?php
                            echo $rows2['req_id'];
                        ?>
                    </td>
                    <td>
                        <?php
                            echo $rows2['recycler_id'];
                        ?>
                    </td>
                    <td>
                        <?php
                            $x=$rows2['recycler_id'];
                            $query3="select rec_name, rec_address from recyclers where username='$x'";
                            $res3=mysqli_query($con,$query3);
                            $rows3=$res3->fetch_assoc();
                            echo $rows3['rec_name'];
                        ?>
                    </td>
                    <td>
                        <?php
                            echo $rows3['rec_address'];
                        ?>
                    </td>
                    <td>
                        <?php
                            if($rows2['status'])
                            {
                                echo "Approved";
                            }
                        ?>
                    </td>
                    </tr>
                    <?php } ?>
            </table>
        </div>
        <!--===== GSAP =====-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>

        <!--===== MAIN JS =====-->
        <script src="js/col_js.js"></script>
    </body>
</html>