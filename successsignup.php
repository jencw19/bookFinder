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

				<a href="index.php"><img src="bookworm2.jpg" alt="">


				</a>



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
			<div class="col m6  ">
    <div class="container _white"style="min-height:400px">
<h2 style ="padding-top: 50px">Sign up successful!</h2>
<button class="_xlarge _round " style = "background-color: teal; color: white;"><a href = "login.php">Login<a/></button>
</div>
    </div>
    <div class="col m6">
			<p><img src="https://images.unsplash.com/flagged/photo-1570263360959-668c951beb64?ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8Y2hpbGRyZW4lMjByZWFkaW5nfGVufDB8MnwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"/></p>
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