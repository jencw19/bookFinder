
<?php

session_start();

include("conn.php");


$read = "SELECT * FROM users";

$result = $conn->query($read);


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

		<li><a href="resources.php">Resources</a></li>
		<li><a href="contact.php">Contact</a></li>
		<?php
		
		if(!isset($_SESSION['user'])){
			echo "
		
		<li style='float:right;'><a href='login.php' >Login</a></li> ";
		}else {

			echo
			" <li 
			style ='float:right;'>
			<a href = '../logout.php'>Log out</a>
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
		Already registered? Please sign in or <a href = "usersignup.php">click here to sign up</a>

		</div>
	</div>
   
	
	<div class="row">
		<div class="col m6 myparagraph">
    <form action="usersign.php" method="post">
		<div class = "col m1"></div>
        <p>
            <label>UserName:</label>
			<div class = "col m1"></div>
            <input  name="userfield" type="text" required="required"
             value="" placeholder="username">
             <span id="help"> provide a valid username </span>
             <br/>
            </p>
			<div class = "col m1"></div>
            <p>
                <label>Password:</label>
				<div class = "col m1"></div>
                <input name="passfield" type="password" required="required" value="" placeholder="password">
                <span id="help"> provide a valid password</span><br/>
            </p>
			<div class = "col m1"></div>
            <p>
                <input id="but" name="submit" type="submit" value="login" style = "background-color: teal; color: white"></p>
            </form>
            <div class="clearfloat">
                 </div>
                </div>
				<div class="col m6">
			<p><img src="https://images.unsplash.com/photo-1455884981818-54cb785db6fc?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTd8fGNoaWxkcmVuJTIwYm9va3N8ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"/></p>
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
	</div>
	
</body>

<script src="https://rawgit.com/outboxcraft/beauter/master/beauter.min.js"></script>

</html>

