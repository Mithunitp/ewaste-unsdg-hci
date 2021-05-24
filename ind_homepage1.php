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
            form input[type="text"],input[type="number"],textarea{
                color:white;
                background-color: transparent;
                border-bottom: 1px solid white;
                border-top:none;
                border-left:none;
                border-right:none;
                font-family: Arial, Helvetica, sans-serif;
                height:40px;
                width:650px;
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
                        <li class="nav__item"><a href="ind_homepage1.php" class="nav__link active">Home</a></li>
                        <li class="nav__item"><a href="ind_bin.php" class="nav__link">Bins</a></li>
                        <li class="nav__item"><a href="#" class="nav__link">Disposal Procedure</a></li>
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
                        <form id="form" action="ind_homepage1.php" onsubmit="return validateForm()" method="post">
                            <!--fieldset-->
                                <br><br><h3 class="title">Personal Details</h3>
                                <input type="text" id="name" name="name" placeholder="Enter Your Name">
                                <br><input type="number" id="mobileno" name="mobileno" placeholder="Enter Your Mobile Number" max="9999999999">
                                <br><input type="text" id="email" name="email" placeholder="Enter Your E-mail ID">
                                <!--h3 class="title">Address</h3-->
                                <br><input type="text" id="address" name="address" placeholder="Enter Your Address">
                                <br><input type="number" id="pincode" name="pincode" placeholder="Enter your Pincode">
                                <h3 class="title">E-waste specifications</h3>
                                <!--<label for = "item_cat">Choose Item categories (Hold down control/command key to select multiple)</label>
                                <select name="item_cat" multiple>
                                <option value="phone">Mobile Phone</option>
                                <option value="camera">Camera/Camcoder</option>
                                <option value="laptop">Laptop</option>
                                <option value="battery">Batteries</option>
                                <option value="television">Television</option>
                                <option value="charger">Charger</option>
                                <option value="cable">Cables</option>
                                <option value="mouse">Mouse</option>
                                <option value="keyboard">Keyboard</option>
                                <option value="joystick">Joystick</option>
                                <option value="motherboard">Motherboard</option>
                                <option value="chipset">Chipset</option>
                                <option value="PCB">PCBs</option>
                                
                                </select>
                                <br /><br>-->
                                <center>
                                <table>
                                    <tr>
                                        <td><select name="item_cat[]" style="height:37px">
                                        <option value="phone" disabled selected="selected">Select Type</option>
                                <option value="phone">Mobile Phone</option>
                                <option value="camera">Camera/Camcoder</option>
                                <option value="laptop">Laptop</option>
                                <option value="battery">Batteries</option>
                                <option value="television">Television</option>
                                <option value="charger">Charger</option>
                                <option value="cable">Cables</option>
                                <option value="mouse">Mouse</option>
                                <option value="keyboard">Keyboard</option>
                                <option value="joystick">Joystick</option>
                                <option value="motherboard">Motherboard</option>
                                <option value="chipset">Chipset</option>
                                <option value="PCB">PCBs</option></select>
                                <input type="number" name="qty[]" style="height:35px; width:510px" placeholder="Enter quantity"></td>
                                    </tr>
                                    <tr>
                                        <td><select name="item_cat[]" style="height:37px">
                                        <option value="phone" disabled selected="selected">Select Type</option>
                                <option value="phone">Mobile Phone</option>
                                <option value="camera">Camera/Camcoder</option>
                                <option value="laptop">Laptop</option>
                                <option value="battery">Batteries</option>
                                <option value="television">Television</option>
                                <option value="charger">Charger</option>
                                <option value="cable">Cables</option>
                                <option value="mouse">Mouse</option>
                                <option value="keyboard">Keyboard</option>
                                <option value="joystick">Joystick</option>
                                <option value="motherboard">Motherboard</option>
                                <option value="chipset">Chipset</option>
                                <option value="PCB">PCBs</option></select>
                                <input type="number" name="qty[]" style="height:35px; width:510px" placeholder="Enter quantity"></td>
                                    </tr>
                                    <tr>
                                        <td><select name="item_cat[]" style="height:37px">
                                        <option value="phone" disabled selected="selected">Select Type</option>
                                <option value="phone">Mobile Phone</option>
                                <option value="camera">Camera/Camcoder</option>
                                <option value="laptop">Laptop</option>
                                <option value="battery">Batteries</option>
                                <option value="television">Television</option>
                                <option value="charger">Charger</option>
                                <option value="cable">Cables</option>
                                <option value="mouse">Mouse</option>
                                <option value="keyboard">Keyboard</option>
                                <option value="joystick">Joystick</option>
                                <option value="motherboard">Motherboard</option>
                                <option value="chipset">Chipset</option>
                                <option value="PCB">PCBs</option></select>
                                <input type="number" name="qty[]" style="height:35px; width:510px" placeholder="Enter quantity"></td>
                                    </tr>
                                    <tr>
                                        <td><select name="item_cat[]" style="height:37px">
                                        <option value="phone" disabled selected="selected">Select Type</option>
                                <option value="phone">Mobile Phone</option>
                                <option value="camera">Camera/Camcoder</option>
                                <option value="laptop">Laptop</option>
                                <option value="battery">Batteries</option>
                                <option value="television">Television</option>
                                <option value="charger">Charger</option>
                                <option value="cable">Cables</option>
                                <option value="mouse">Mouse</option>
                                <option value="keyboard">Keyboard</option>
                                <option value="joystick">Joystick</option>
                                <option value="motherboard">Motherboard</option>
                                <option value="chipset">Chipset</option>
                                <option value="PCB">PCBs</option></select>
                                <input type="number" name="qty[]" style="height:35px; width:510px" placeholder="Enter quantity"></td>
                                    </tr>
                                    <tr>
                                        <td><select name="item_cat[]" style="height:37px">
                                        <option value="phone" disabled selected="selected">Select Type</option>
                                <option value="phone">Mobile Phone</option>
                                <option value="camera">Camera/Camcoder</option>
                                <option value="laptop">Laptop</option>
                                <option value="battery">Batteries</option>
                                <option value="television">Television</option>
                                <option value="charger">Charger</option>
                                <option value="cable">Cables</option>
                                <option value="mouse">Mouse</option>
                                <option value="keyboard">Keyboard</option>
                                <option value="joystick">Joystick</option>
                                <option value="motherboard">Motherboard</option>
                                <option value="chipset">Chipset</option>
                                <option value="PCB">PCBs</option></select>
                                <input type="number" name="qty[]" style="height:35px; width:510px" placeholder="Enter quantity"></td>
                                    </tr>
                                </table>
                                </center>

                                <!--<input type="text" id="dimensions" name="item_dimensions" placeholder="Enter Item size (Dimensions)">
                                <input type="number" id="quantity" name="item_quantity" placeholder="Enter Item Quantity">
                                <input type="number" id="age" name="item_age" placeholder="How old is the item ? (in years)">-->

                                <br><input type="submit" name="submit" class="home__button" value="Submit">
                            <!--/fieldset-->
                                    
                        </form>
                        <script>
                        function validateForm(){
                            if(document.getElementById("name").value.length == 0 || document.getElementById("mobileno").value.length == 0 || document.getElementById("address").value.length==0 || document.getElementById("pincode").value.length==0 || document.getElementById("quantity").value.length==0){ 
                                    alert("Please enter all the fields");
                                    return false;
                            }
                            else{
                                return true;
                            }
                        }
                        </script>
                    </div>
                </div>
            </section>
        </main>

        <!--===== GSAP =====-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>

        <!--===== MAIN JS =====-->
        <script src="js/ind_js.js"></script>
    </body>
    <?php
		if(isset($_POST['submit']) && isset($_SESSION['username']))
        {
			$a = $_SESSION['username'];
			$b = $_POST['name'];
			$c = $_POST['mobileno'];
			$d = $_POST['email'];
			$e = $_POST['address'];
			$f = $_POST['pincode']; 
			for($i=0; $i<count($_POST["item_cat"]); $i++)
            {
				$g = $_POST["item_cat"][$i];
				$h = $_POST["qty"][$i];
				$q="INSERT INTO `ind_ewaste`(`username`, `name`, `mobileno`, `email`, `address`, `pincode`, `item_cat`, `item_quantity`) VALUES ('$a', '$b', '$c', '$d' , '$e', '$f', '$g', $h)";
				$res = mysqli_query($con, $q);
			}
            $_SESSION['pin']=$f;
            echo '<script>window.location="ind_bin.php"</script>';
		}
	?>
</html>