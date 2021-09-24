<html>
<?php
// Start the session
session_start();
?>
	<head>
		<style>
					body, html {

			
			/* The image used */
			background-image: url("about.jpg");

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
				color: black;
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
			<li><a class="active" href="about.php">About Us</a></li>
			<li><a href="user_login.php">User</a></li>
			<li><a href="home.php">Home</a></li>
		</ul>
		
		<div id=bottom_posts>
		
			<div id=posts>
				<h2 style="font-size:28px;color: #0000B9;"> Sri Maruthi Pharma</h2>
				<div id=img_title>
					
					<p style="font-size:20px;color: #0000B9; "> 
                        SMP is a company, established under a mission of service to humanity, we provide a wide range of pharmaceuticals and we are building a reputation of quality and integrity known around the world.
                        The products that we supply at SMP Meets the best safety and quality standards. We are being audited regularly by officials to ensure that the highest safety and quality criteria were met.
                        </p>
				
				</div>
			
			</div>
			
			
		
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