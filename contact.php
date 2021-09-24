<html>
<head>
<title>PHP Contact Form</title>

<style>
						body, html {

							
				/* The image used */
				background-image: url("contact.jpg");

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
			
			* {
				box-sizing: border-box;
			}

			input[type=text], select, textarea,input[type=password],input[type=email],input[type=number],input[type=date] {
				margin-right:400px;
				text-align:center;
				width: 40%;
				padding: 12px;
				border: 1px solid #ccc;
				border-radius: 4px;
				resize: vertical;
			}

			label {
				font-size:18px;
				margin-left:450px;
				padding: 12px 12px 12px 0;
				display: inline-block;
			}

			input[type=submit] {
				background-color: #F6BE00;
				color: white;
				padding: 12px 20px;
				border: none;
				border-radius: 4px;
				cursor: pointer;
				float: right;
			}

			input[type=submit]:hover {
				background-color: #F6BE00;
			}

			.container {
			    
				border-radius: 5px;
				
				padding: 20px;
			}

			.col-25 {
				float: left;
				width: 50%;
				margin-top: 6px;
			}

			.col-75 {
				float: left;
				width: 50%;
				margin-top: 6px;
			}

			/* Clear floats after the columns */
			.row:after {
				content: "";
				display: table;
				clear: both;
			}

			/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
			@media screen and (max-width: 600px) {
				.col-25, .col-75, input[type=submit] {
					width: 100%;
					margin-top: 0;
				}
			}
			
		</style>
</head>
<body>
        <ul>
			<li id="titlehead"><p id="title">Sri Maruthi Pharma</p></li>
			<li style=margin-right:10px;><a href="admin_login.php">Admin</a></li>
			<li><a href="pharmacist_login.php">Pharmacist</a></li>
            <li><a class="active"  href="contact.php">contact Us</a></li>
			<li><a href="about.php">About Us</a></li>
			<li><a href="user_login.php">User</a></li>
			<li><a href="home.php">Home</a></li>
		</ul>
    <div style="font-style:italic; font-size:30px;padding-left:30px;color: #0000B9;" class="form-container">
    <h2 style="font-style:italic; font-size:30px;padding-left:30px; color: #0000B9; " >We would love to hear it from you on your query.</h2>
        <form name="frmContact" id="" method="get"
             enctype="multipart/form-data"
            onsubmit="return validateContactForm()">

            <div class="input-row">
                <label style="padding: 20px 0px 0px 0px;">Name</label> <span 
                    id="userName-info" class="info"></span> <br /> 
                    <div style="padding: 0px 0px 0px 450px;">
                        <input type="text" class="input-field" name="userName" id="userName"  >
                    </div>
            </div>
            <div class="input-row">
                <label>Email</label> <span id="userEmail-info"
                    class="info"></span><br /> 
                    <div style="padding: 0px 0px 0px 450px;">
                        <input type="text" class="input-field" name="userEmail" id="userEmail" />        
                    </div>
            </div>
            <div class="input-row">
                <label>Phone Number</label> <span id="subject-info"
                    class="info"></span><br /> 
                    <div style="padding: 0px 0px 0px 450px;">
                        <input type="text" class="input-field" name="subject" id="subject" />       
                    </div>
            </div>
            <div class="input-row">
                <label>Message</label> <span id="userMessage-info"
                    class="info"></span><br />
                    <div style="padding: 0px 0px 0px 450px;">
                        <textarea name="content" id="content" class="input-field" cols="60" rows="6"></textarea>
                    </div>
            </div>
            <div>
                <input type="submit" style="margin-right:863px; margin-top:10px;" name="send" class="btn-submit"
                    value="Send" />

                <div id="statusMessage"> 
                        <?php
                        if (! empty($message)) {
                            ?>
                            <p class='<?php echo $type; ?>Message'><?php echo $message; ?></p>
                        <?php
                        }
                    
                        
                        ?>
                        
                    </div>
            </div>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-2.1.1.min.js"
        type="text/javascript"></script>
    <script type="text/javascript">
        function validateContactForm() {
            var valid = true;

            $(".info").html("");
            $(".input-field").css('border', '#e0dfdf 1px solid');
            var userName = $("#userName").val();
            var userEmail = $("#userEmail").val();
            var phone_number = $("#subject").val();
            var content = $("#content").val();
            
            if (userName == "") {
                $("#userName-info").html("Required.");
                $("#userName").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (userEmail == "") {
                $("#userEmail-info").html("Required.");
                $("#userEmail").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (!userEmail.match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/))
            {
                $("#userEmail-info").html("Invalid Email Address.");
                $("#userEmail").css('border', '#e66262 1px solid');
                valid = false;
            }

            if (phone_number == "") {
                $("#subject-info").html("Required.");
                $("#subject").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (content == "") {
                $("#userMessage-info").html("Required.");
                $("#content").css('border', '#e66262 1px solid');
                valid = false;
            }
            if(valid==true){
                alert("Thank you for contacting us");
            }
            return valid;
        }
</script>
</body>
</html>