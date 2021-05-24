<?php
	session_start();
	require_once('dbconfig/config.php');
	//phpinfo();
    if(!isset($_SESSION['username']))
    {
    echo '<script>window.location="ind_login.php"</script>';
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
        <link rel="stylesheet" href="css/ind_homepagestyle1.css">

        <title>E-Waste Management Portal</title>
        <style>
            table {
                border-collapse: collapse;
                width: 100%;
            }

            th, td {
                padding: 8px;
                text-align: left;
                border-bottom: 1px solid #ddd;
            }
        </style>
    </head>
    <body>
        <!--===== HEADER =====-->
        <header class="l-header">
            <nav class="nav bd-grid">
                <div>
                    <a href="#" class="nav__logo">E-Waste Management Portal</a>
                </div>
                
                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-menu'></i>
                </div>

                <div class="nav__menu" id="nav-menu">
                    <div class="nav__close" id="nav-close">
                        <i class='bx bx-x'></i>
                    </div>

                    <ul class="nav__list">
                        <li class="nav__item"><a href="ind_homepage1.php" class="nav__link">Home</a></li>
                        <li class="nav__item"><a href="ind_bin.php" class="nav__link active">Bins</a></li>
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
                        <h1>Thank you for contributing to sustainability by using our portal!</h1>
                        <h3>Please find your request below:</h3>
                        <table>
                        <tr>
                            <th>Bin Number</th>
                            <th>Location</th>
                            <th>Pincode</th>
                            <th>Accesscode</th>
                        </tr>
                        <?php
                            $q="SELECT * FROM BIN A, IND_EWASTE B WHERE A.STATUS!='FULL' AND A.BIN_PIN=B.PINCODE GROUP BY BIN_ID";
                            $res=mysqli_query($con,$q);
                            while($rows=$res->fetch_assoc())
                            { 
                        ?>
                        <tr>
                        <td>
                            <?php
                                echo $rows['bin_id']
                            ?>
                        </td>
                        <td>
                            <?php
                                echo $rows['bin_loc']
                            ?>
                        </td>
                        <td>
                            <?php
                                echo $rows['bin_pin']
                            ?>
                        </td>
                        <td>
                            <?php
                                echo $rows['ind_accesscode']
                            ?>
                        </td>
                        </tr>
                        <?php
                            }
                        ?>
                        </table>
                    </div>
                </div>
            </section>
        </main>

        <!--===== GSAP =====-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>

        <!--===== MAIN JS =====-->
        <script src="js/ind_js.js"></script>
    </body>
</html>