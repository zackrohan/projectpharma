<html>
<?php
// Start the session
session_start();
?>
	<head>
		<style>
					body, html {

			
			/* The image used */
			background-image: url("bgimage.jpg");

			/* Full height */
			height: 100%; 

			/* Center and scale the image nicely */
			background-position: center;
			background-repeat: no-repeat;
			background-size: cover;
			}

			
			
			#title{
				background-color:yellow;
				font-size:33px;
				
				
				color:black;
				margin-left:20px;
				margin-top:20px;
				margin-bottom:20px;
				
				}
				
			ul {
			list-style-type: none;
			margin: 0;
			padding: 0;
			overflow: hidden;
			background-color: yellow;
			}
			
			li {
				float: right;
			}
			
			#titlehead{
				float: left;
			}

			li a {
				display: block;
				color: black;
				font-size:20px;
				text-align: center;
				padding: 16px 20px;
				margin-top:10px;
				text-decoration: none;
			}

			li a:hover:not(.active) {
				background-color: #F6BE00;
			}

			.active {
				background-color: #F6BE00;
			}
			
			#home_img{
				padding-left:50px;
				padding-bottom:10px;
				
			}
			
			#bottom_posts{
				color: #0000B9;
				display: grid;
				grid-template-columns: auto auto auto;
				padding: 10px;
			
			}
			
			#img_title{
				
				display: grid;
				grid-template-columns: auto auto auto;
				padding: 5px;
			
			}
			
			#posts{
				padding: 20px;
				font-size: 30px;
				text-align: center;
			
			}
			
		</style>
	</head>
	
	<body>
		
		
		
		<ul>
			<li id="titlehead"><p id="title">Sri Maruthi Pharma</p></li>
			<li style=margin-right:10px;><a href="admin_login.php">Admin</a></li>
			<li><a href="pharmacist_login.php">Pharmacist</a></li>
			<li><a href="contact.php">contact Us</a></li>
			<li><a href="about.php">About Us</a></li>
			<li><a href="user_login.php">User</a></li>
			<li><a class="active" href="home.php">Home</a></li>
		</ul>
		
		<div id=bottom_posts>
		<img src="logo.jpeg" alt="" height=100px width=100px>
			<div id=posts>
				
				<h2 style="font-size:28px;"> Sri Maruthi Pharma </h2>
				<div id=img_title>
					
					<p style="font-size:20px;"> Sri Maruthi Pharma in Bangalore is one of the leading businesses in Surgical Equipment Dealers. Also known for Surgical Equipment Dealers, Pharmaceutical Product Distributors, Medical Equipment Dealers, Pharmaceutical Distributors, Surgical Item Dealers, Medicine Distributors, Medical Product Dealers, Generic Medicine Wholesalers and much more.
					</p>
				
				</div>

			
			</div>
			
			
			
		
		</div>
		<div id=posts style="color: #0000B9">
				<h2 style="font-size:28px;"> SMP or Sri Maruthi Pharma are dealers in: </h2>
				<div id=img_title style="padding-left:400px;">
					
					<p style="font-size:20px; "> Chemists <br>
												Surgical Equipment Dealers <br>
												Pharmaceutical Product Distributors <br>
												Medical Equipment Dealers <br>
												Pharmaceutical Distributors <br>
												Pharmaceutical Product Manufacturers <br>
												Medicine Wholesalers <br>
												Surgical Face Mask Dealers<br>
												N95 Face Mask Dealers<br>
												Medicine Distributors<br>
												Generic Medicine Distributors<br>
												Pharmaceutical Product Wholesalers and much more<br>
					</p>
				
				</div>
				
				<a href="contact.php"><button >Need Help? </button></a>
				
			</div>
		
		
		
		
		<?php
		
		$servername = "localhost";
		$username = "root";
		$password = "";

		// Create connection
		$conn = new mysqli($servername, $username, $password);
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		} 

		// Create database
		$sql = "CREATE DATABASE IF NOT EXISTS pharmacydb";
		if ($conn->query($sql) === TRUE) {
			//echo "Database created successfully";
			
		
		
		$conn->close();
		}
		?>
		
	</body>
	
</html>