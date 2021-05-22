<!---DOCTYPE html>
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Navbar</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                  </li>
                </ul>
              </div>
            </div>
        </nav>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    </body>
</html---> 


<!DOCTYPE html>
<html lang="en">
<head>
	<?php 
		session_start();
	?>
	<meta charset="UTF-8">
	<title>Enter E-waste details</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/ind_homepagestyle.css">
	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous"> 
	 <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	 
	 <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
	 
	 <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script> 
</head>
<body>
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
              <a class="navbar-brand" href="#"><strong><i class="fa fa-arrow-up"></i>&nbsp Individuals</strong></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="index.html">Home</a>
                  </li>
				  <li class="nav-item active">
                    <a class="nav-link" aria-current="page" href="index.html">Details Collection</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Disposal procedure</a>
                  </li>
                  
                 
                </ul>
              </div>
			  <span class="align:right" style="color:white">Hello, <?php echo $_SESSION['username'] ?></span>
            </div>
        </nav>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<div class="row">
		<div class="col-md-12 col-md-offset-3">
			<form id="form" action="ind_homepage.php" onsubmit="return validateForm()" method="post">

				<ul id="progressbar">
					<li class="active">Personal Details</li>
					<li>Address</li>
					<li>E-waste specifications</li>
				</ul>

				<fieldset>
					<h2 class="title">Personal Details</h2>
					<input type="text" id="name" name="name" placeholder="Enter Your Name">
					<input type="number" id="mobileno" name="mobileno" placeholder="Enter Your Mobile Number" max="9999999999">
					<input type="text" id="email" name="email" placeholder="Enter Your E-mail ID">
					<h2 class="title">Address</h2>
					<input type="text" id="address" name="address" placeholder="Enter Your Address">
					<input type="bigint" id="pincode" name="pincode" placeholder="Enter your Pincode">
					<h2 class="title">E-waste specifications</h2>
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
							<td><select name="item_cat" style="height:37px">
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
					   <input type="number" name="qty[]" style="height:30px; width:70px"></td>
						</tr>
						<tr>
							<td><select name="item_cat" style="height:37px">
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
					   <input type="number" name="qty[]" style="height:30px; width:70px"></td>
						</tr>
						<tr>
							<td><select name="item_cat" style="height:37px">
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
					   <input type="number" name="qty[]" style="height:30px; width:70px"></td>
						</tr>
						<tr>
							<td><select name="item_cat" style="height:37px">
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
					   <input type="number" name="qty[]" style="height:30px; width:70px"></td>
						</tr>
						<tr>
							<td><select name="item_cat" style="height:37px">
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
					   <input type="number" name="qty[]" style="height:30px; width:70px"></td>
						</tr>
					</table>
					</center>
        
					<!--<input type="text" id="dimensions" name="item_dimensions" placeholder="Enter Item size (Dimensions)">
					<input type="number" id="quantity" name="item_quantity" placeholder="Enter Item Quantity">
					<input type="number" id="age" name="item_age" placeholder="How old is the item ? (in years)">-->

					<input type="submit" name="submit" class="next action-button" value="Submit">
				</fieldset>
							
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

	

	<!-- Linking JS Files -->
	<!--<script type="text/javascript" src="js/ind_js.js"></script>-->
	
</body>
</html>