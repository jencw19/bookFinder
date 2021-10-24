<?php

session_start();

include("conn.php");
if(!isset($_SESSION["users"])){
    header("Location: login.php");
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">	
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
	<link rel="stylesheet" type="text/css" href="https://rawgit.com/outboxcraft/beauter/master/beauter.min.css" />
	<script src="https://kit.fontawesome.com/ee3562f2b7.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="../ui.css" />
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
		<li><a href="userprofile.php">Profile</a></li>
		<?php
		
		if(!isset($_SESSION['users'])){
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

		<li class="-icon">
			<a href="javascript:void(0);" onclick="topnav('myTopnav2')">☰</a>
		</li>

	</ul>

	<?php
	$user=$_SESSION["users"];
	echo "<div class='row'>
			<div class='col m12'>
				<div class='mysearch'>Welcome $user</div>
			</div>
		</div>";
	?>


<div class="row">
			<div class="col m12">
				<div class="mysearch"> Edit Your Profile</div>
			</div>
</div>




<?php
$username= $_SESSION["users"];

$userquery = "SELECT username, email, firstname, lastname, favauth, favbook, favgenre, childage
 FROM users WHERE username = '{$username}'";

$result = $conn->query($userquery);
			if(!$result){
				echo $conn->error;
						}

								
			$numberofrows = $result->num_rows;
								
				if ($numberofrows>0){
									
					while($row = $result->fetch_assoc()){ 

										echo "
                                        <form action ='processprofileedit.php' method = 'post'>
                                        <table class='_width100'>
  
										<tbody>
										  
										  
									   <tr>
											<td style = 'font-weight: bold;' >First Name:</td>
                                            <td>{$row['firstname']}</td>
                                            <td>
                                            <input name= 'firstname' class='_full-width' type='text' placeholder='Enter New First Name' id='First Name'> 
                                             </td>											
										  </tr>

										  <tr>
											<td style = 'font-weight: bold;'>Surname:</td>
                                            <td>{$row['lastname']}</td>
                                            <td>
                                            
                                            <input name= 'surname' class='_full-width' type='text' placeholder='Enter New Last Name' id='Last Name'> 
                                             </td>
										  </tr>

										  <tr>
											<td style = 'font-weight: bold;'>Email:</td>
                                            <td>{$row['email']}</td>
                                            <td>

                                            <input name= 'email' class='_full-width' type='email' placeholder=Enter New Email id='Email'> 
                                             </td>	
										  </tr>

										  <tr>
											<td style = 'font-weight: bold;'>Favourite Children's Author:</td>
                                            <td>{$row['favauth']}</td>
                                            <td>
                                            <input name= 'favauth' class='_full-width' type='text' placeholder='Enter New Favourite Author' id='Author'> 
                                             </td>	
										  </tr>

                                          <tr>
											<td style = 'font-weight: bold;'>Favourite Children's Book:</td>
                                            <td>{$row['favbook']}</td>
                                            <td>
                                            <input name= 'favbook' class='_full-width' type='text' placeholder='Enter New Favourite Book' id='Favourite Book'> 
                                             </td>	
										  </tr>

										  <tr>
											<td style = 'font-weight: bold;'>Favourite Genre:</td>
                                            <td>{$row['favgenre']}</td>
                                            <td>
                                            <input name= 'favgen' class='_full-width' type='text' placeholder='Enter New Favourite Genre' id='Genre'> 
                                             </td>
										  </tr>

										  <tr>
											<td style = 'font-weight: bold;'>Child's age:</td>
                                            <td>{$row['childage']}</td>
                                            <td>
                                            <input name= 'age' class='_full-width' type='text' placeholder='Update Child Age' id='Age'> 
                                             </td>
										  </tr>

										</tbody>
									  </table>
                                      <input name= 'submit' class=' _xlarge _round ' style = 'background-color: teal; color: white;  button' type='submit' value='Save Changes'>
                                      <input name= 'reset' class='  _xlarge _round ' style = 'background-color: teal; color: white; button' type='reset' value='Reset'>
                                      </form>";
									  
										
										
                                            
                                    }
                                }
                                            
                                            

?>
  
	
	<div class= "fullfooter">
		<div class="row">
			<div class="col m12 mytopfooter ">
				<div class= "col m6 colfooter">
					Follow us          <i class="fab fa-twitter"></i> | <i class="fab fa-facebook-square"></i> | <i class="fab fa-instagram"></i> | <i class="fab fa-pinterest-square"></i>
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

		<div class ="row">
			<div class="bottom">
				<div class="col m3">Copyright Notice</div>
				<div class = "col m3">Privacy Policy</div>
			</div>
		</div>

	</div>

</body>

<script src="https://rawgit.com/outboxcraft/beauter/master/beauter.min.js"></script>

</html>