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
        <style>
            form input[type="text"],textarea{
                color:white;
                background-color: transparent;
                border-bottom: 1px solid white;
                border-top:none;
                border-left:none;
                border-right:none;
                font-family: Arial, Helvetica, sans-serif;
                height:50px;
            }
            form input[type="submit"]{
                
                border:none;
                font-size:1rem;
            }
            ::placeholder{
                color:white;
                font-family: Arial, Helvetica, sans-serif;
                font-size:1rem;
            }
        </style>
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
                    <div class="home__img">
                        <img src="img/img1.png" alt="" data-speed="-2" class="move">
                        <img src="img/img2.png" alt="" data-speed="2" class="move">
                        <img src="img/img3.png" alt="" data-speed="2" class="move">
                        <img src="img/img4.png" alt="" data-speed="-2" class="move">
                        <img src="img/img5.png" alt="" data-speed="-2" class="move">
                    </div>

                    <div class="home__data">
                        <h2>Specify shipment details if your request has been approved.</h2>
                        <!--h3>Give a detailed description about the category and quantity of e-waste.</h3-->
                        <form name="ship_form" action="col_shipments.php" method="post">
                            <input type="text" name="rec_id" placeholder="Enter recycler ID." style="width:650px;" required><br>
                            <br><textarea placeholder="Enter description." name="req_des" style="width:650px;" required></textarea><br>
                            <br><input type="text" name="veh_type" placeholder="Enter vehicle type." style="width:650px;" required><br>
                            <br><input type="text" name="veh_no" placeholder="Enter vehicle number." style="width:650px;" required><br>
                            <br><input type="text" name="driver_name" placeholder="Enter driver name." style="width:650px;" required><br>
                            <br><input type="text" name="driver_mno" placeholder="Enter driver mobile number." style="width:650px;" required><br>
                            <br><input type="submit" class="home__button" name="submit"><br>
                        </form>
                    </div>
                </div>
            </section>
        </main>

        <!--===== GSAP =====-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>

        <!--===== MAIN JS =====-->
        <script src="js/col_js.js"></script>
    </body>
    <?php
        if(isset($_POST['submit']))
        {
            $cid=$_SESSION['username'];
            $rid=$_POST['rec_id'];
            $des=$_POST['req_des'];
            $vt=$_POST['veh_type'];
            $vno=$_POST['veh_no'];
            $dn=$_POST['driver_name'];
            $dm=$_POST['driver_mno'];
            $q="INSERT INTO SHIPMENT(`collector_id`,`recycler_id`,`description`,`vehicle_type`,`vehicle_no`,`driver_name`,`driver_mno`) VALUES('$cid','$rid','$des','$vt','$vno','$dn',$dm)";
            $res=mysqli_query($con,$q);
            if($res)
            {
                echo '<script>alert("Shipment details saved successfully.")</script>';
            }
            else
            {
                echo '<script>alert("Error occured! Try again.")</script>';
            }
        }
    ?>
</html>