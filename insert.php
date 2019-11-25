<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Enter new place</title>
</head>
<body>
	<center><h1><a href="index.html"><img src="images/logo.png" alt=""></a></h1></center>
	<h1>Enter new places</h1>
			
<form method="post" action="">
<span class="label-input100">Search for the name of the attraction</span>
<input class="input100" type="text" name="loc" placeholder="Enter the name">
  <br>

  <input type="submit" value="Search">
</form> 
	
<?php
	$new = "";
	if(isset($_POST['loc'])) {
		$new = $_POST['loc'];
		
}
?>
	<div class="mapouter"><div class="gmap_canvas"><iframe width="400" height="300" id="gmap_canvas" src="https://maps.google.com/maps?q= <?php echo $new; ?> &t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.whatismyip-address.com"></a></div><style>.mapouter{position:relative;text-align:right;height:300px;width:400px;}.gmap_canvas {overflow:hidden;background:none!important;height:300px;width:400px;}</style></div>
	
	<br>
	
<form method="post" action="insert.php">
	
				<div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Name of the attraction (as in Google Maps)</span>
					<input class="input100" type="text" name="name" placeholder="Enter the name" required>
					<span class="focus-input100"></span>
				</div>
	
			<br>
			  
			<div class="wrap-input100 input100-select">
					<span class="label-input100">Terrain type</span>
					<div>
						<select class="selection-2" name="terrain" required>
							<option selected hidden value="">Select terrain</option>
							<option value="hill">Hill top</option>
							<option value="forest">Forest</option>
							<option value="park">Park</option>
							<option value="beach">Beach</option>
							<option value="other">Other</option>
						</select>
					</div>
					<span class="focus-input100"></span>
				</div>

	<br>
				<div class="wrap-input100 input100-select">
					<span class="label-input100">District</span>
					<div>
						<select class="selection-2" name="district" required>
							<option selected hidden value="">Select district</option>
							<option value="Alappuzha">Alappuzha</option>
							<option value="Ernakulam">Ernakulam</option>
							<option value="Idukki">Idukki</option>
							<option value="Kannur">Kannur</option>
							<option value="Kasaragod">Kasaragod</option>
							<option value="Kollam">Kollam</option>
							<option value="Kottayam">Kottayam</option>
							<option value="Kozhikode">Kozhikode</option>
							<option value="Malappuram">Malappuram</option>
							<option value="Palakkad">Palakkad</option>
							<option value="Pathanamthitta">Pathanamthitta</option>
							<option value="Thiruvananthapuram">Thiruvananthapuram</option>
							<option value="Thrissur">Thrissur</option>
							<option value="Wayanad">Wayanad</option>
						</select>
					</div>
					<span class="focus-input100"></span>
				</div>
				
	<br>
	
			<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<span class="label-input100">Closest POI</span>
					<input class="input100" type="text" name="closepoi" placeholder="Enter the closest place of interest">
					<span class="focus-input100"></span>
				</div>

	<br>
	
				<div class="wrap-input100 validate-input" data-validate = "Message is required">
					<span class="label-input100">Other info</span>
					<textarea class="input100" name="message" placeholder="Enter other useful information"></textarea>
					<span class="focus-input100"></span>
				</div>

	<br>
	
				<div class="container-contact100-form-btn">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<button class="contact100-form-btn">
							<span>
								Submit
								<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
							</span>
						</button>
					</div>
				</div>
			</form>
	
</body>
</html>