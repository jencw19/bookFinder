<?php

session_start();

include("conn.php");
?>

<!DOCTYPE html>
<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">


	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
	<link rel="stylesheet" type="text/css" href="https://rawgit.com/outboxcraft/beauter/master/beauter.min.css" />

	<script src="https://kit.fontawesome.com/ee3562f2b7.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="ui.css" />
</head>

<body>
	<div class="row">
		<div class="col m4"></div>
		<div class="col m4 myheader">
			<div class="mylogo">
				<a href="index.php"><img src="bookworm2.jpg" alt=""></a>
			</div>
		</div>
	</div>


	<ul class="topnav" id="myTopnav2">
		<li><a href="index.php">Home</a></li>
		<li class="dropdown">
			<a href="#">Books</a>
			<div class="dropdown-content">
				<a href="featured.php">Featured</a>
				<a href="new.php">New</a>  
				<a href="trending.php">Trending</a>
			</div>
		</li>
		<?php
		
		if(isset($_SESSION["users"])){
			echo "
		<li><a href='userprofile.php'>Profile</a></li>";
		}
		?>

		<?php
		if(isset($_SESSION["users"])){
			echo "
		<li><a href='userrecommendations.php'>Your Recommendations</a></li>";
		}
		?>

		<li><a href="resources.php">Resources</a></li>
		<li><a href="contact.php">Contact</a></li>

		<?php
		if(!isset($_SESSION["users"])){
			echo "
		
		<li style='float:right;'><a href='login.php' >Login</a></li> ";
		}else {

			echo
			" <li 
			style ='float:right;'>
			<a href = 'logout.php'>Log out</a>
			</li>";
		}
		?>
	</a></li>

		<li class="-icon">
			<a href="javascript:void(0);" onclick="topnav('myTopnav2')">☰</a>
		</li>
	</ul>

	<div class="row">
		<div class="col m12 mysearch">
			Got a question? Please fill out the form below and we will be in touch 
		</div>
	</div>

	<div class="row">
		<div class="col m7 myparagraph">
			<form>
				<fieldset>
					<legend>Contact information:</legend>
					<div class="row">
						<div class="col m6">
							<label for="Email">Enter email</label>
							<input class="_full-width" type="email" placeholder="test@mail.com" id="Email">
						</div>
					</div>

					<label for="Message">Message</label>
					<div class="col m12">
						<textarea class="_width100" placeholder="Your message.." id="Message"></textarea>
					</div>

					<input class=" _primary button" type="submit" value="Submit">
					<input class="button" type="reset" value="Reset">
					<br>
				</fieldset>
			</form>

		</div>



		<div class="col m5">
			<p><img src="https://images.unsplash.com/photo-1516042438821-0abd7a73c4b3?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MTN8fGNoaWxkcmVuJTIwYm9va3xlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"/></p>
		</div>	
	</div>


	<div class="fullfooter">
		<div class="row">
			<div class="col m12 mytopfooter ">
				<div class="col m6 colfooter">
					Follow us <i class="fab fa-twitter"></i> | <i class="fab fa-facebook-square"></i> | <i
						class="fab fa-instagram"></i> | <i class="fab fa-pinterest-square"></i>
				</div>
					<div class="col m6">
					Keep in touch
					</div>
			</div>
		</div>


		<div class="row">
			<div class="col m6 listfooter ">
				<ul>
					<li><a href="contact.php"> Contact us</a></li>
					<li>Site map</li>
				</ul>

			</div>
			<div class="col m6">
				Sign up to our newsletter full of updates, activities and fun ideas to inspire children to read
				<button class="_round _white"><a href="usersignup.php">Sign Up</a></button>
			</div>
		</div>

		<div class="row">
			<div class="bottom">
				<div class="col m3">Copyright Notice</div>
				<div class="col m3">Privacy Policy</div>
			</div>
		</div>

	</div>

</body>

<script src="https://rawgit.com/outboxcraft/beauter/master/beauter.min.js"></script>

</html>