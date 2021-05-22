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
	<meta charset="UTF-8">
	<title>Enter E-waste details</title>
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
              <a class="navbar-brand" href="#">Details collection</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Disposal procedure</a>
                  </li>
                  
                 
                </ul>
              </div>
            </div>
        </nav>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<div class="row">
		<div class="col-md-12 col-md-offset-3">
			<form id="form">

				<ul id="progressbar">
					<li class="active">Personal Details</li>
					<li>Address</li>
					<li>E-waste specifications</li>
				</ul>

				<fieldset>
					<h2 class="title">Personal Details</h2>
					<input type="text" name="username" placeholder="Enter Username">
					<input type="text" name="name" placeholder="Enter Your Name">
					<input type="bigint" name="mobileno" placeholder="Enter Your Mobile Number">
					<input type="text" name="email" placeholder="Enter Your E-mail ID">

					<input type="button" name="next" class="next action-button" value="next">
				</fieldset>
				<fieldset>
					<h2 class="title">Address</h2>
					<input type="text" name="address" placeholder="Enter Your Address">
					<input type="bigint" name="pincode" placeholder="Enter your Pincode">

					<input type="button" name="previous" class="previous action-button-previous" value="Previous">


					<input type="button" name="next" class="next action-button" value="next">
				</fieldset>
				<fieldset>
					<h2 class="title">E-waste specifications</h2>
                    <label for = "item_cat">Choose Item categories (Hold down control/command key to select multiple)</label>
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
                    <br /><br>
        
					<input type="text" name="item_dimensions" placeholder="Enter Item size (Dimensions)">
					<input type="int" name="item_quantity" placeholder="Enter Item Quantity">
					<input type="int" name="item_age" placeholder="How old is the item ? (in years)">
					

					<input type="button" name="previous" class="previous action-button-previous" value="Previous">


					<input type="submit" name="submit" class="submit action-button" value="submit">
				</fieldset>
				
			</form>
			
		</div>
		
	</div>

	

	<!-- Linking JS Files -->
	<script type="text/javascript" src="js/ind_js.js"></script>
	
</body>
</html>