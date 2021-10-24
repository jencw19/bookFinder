
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
		<div class="col m12 mysearch">
			Please fill out your details below to sign up and receive personalised recommendations
		</div>
	</div>



    
 <div class="row">
 
 	<div class="col m7 myparagraph">
    <form action="processsignup.php" method="post">
        <fieldset>
            <legend>Sign Up:</legend>
            <div class="row">
                <div class="col m10">
                    <label for="username">Enter UserName</label>
                    <input name= "username" class="_full-width" type="text" placeholder="User Name" id="user Name">
                </div>

            </div>

            <div class="row">
                <div class="col m10">
                    <label for="password">Enter Password</label>
                    <input name ="password" class="_full-width" type="text" placeholder="Password " id="Password">
                </div>
            </div>
			<legend>Your Details:</legend>
			<div class="row">
                <div class="col m10">
                    <label for="First Name">Enter First Name</label>
                    <input name= "firstname" class="_full-width" type="text" placeholder="First Name" id="First Name">
                </div>

            </div>

			<div class="row">
                <div class="col m10">
                    <label for="Surname Name">Enter Surname</label>
                    <input name = "surname" class="_full-width" type="text" placeholder="Surname " id="Last Name">
                </div>
            </div>

			<div class="row">
						<div class="col m11">
							<label for="Email">Enter email</label>
							<input name = "email" class="_full-width" type="email" placeholder="test@mail.com" id="Email">
						</div>
					</div>
			<legend>Tell us about yourself:</legend>
			<div class="row">
                <div class="col m10">
                    <label for="Favourite Children's author">Select your favourite Children's author</label>
                    <select ='NEW' name= "favauth" >
                    <option value = "">---Select---</option>
                    <?php
						include ('conn.php');

						$authorquery = "SELECT * FROM Book_Author";
						$getauthor = $conn->query($authorquery);

							if(!$getauthor){
								echo $conn->error;
							}
					
								while($row = $getauthor->fetch_assoc()){
						
									echo 
									"<option value = {$row['author']}>{$row['author']}</option>";
							
								}
							?>
								
                                </select>
							</div>
            </div>
			<div class="row">
                <div class="col m10">
                    <label for="Favourite Children's Book">Select your favourite Children's Book</label>
                    <select ='NEW' name = "favbook">
                    <option value = "">---Select---</option>
                    
					<?php
					include ('conn.php');

					$bookquery = "SELECT ID, BookName FROM Books";
					$getbook = $conn->query($bookquery);

					if(!$getbook){
						echo $conn->error;
					}
						while($row = $getbook->fetch_assoc()){ 
							echo "<option value ={$row['BookName']}>{$row['BookName']}</option>";
						}
					?>
					</select>
                </div>
            </div>

			<div class="row">
						<div class="col m10">
							<label for="Favourite Genre">Select your favourite Genre </label>
							<select ='NEW' name = favgen>
                    <option value = "">---Select---</option>
                    
								<?php
								include ('conn.php');

								$genrequery = "SELECT * FROM Book_Genre";
								$getgenre = $conn->query($genrequery);

								if(!$getgenre){
									echo $conn->error;
								}
									while($row = $getgenre->fetch_assoc()){ 
										echo "<option value ={$row['Genre']}>{$row['Genre']}</option>";
									}
								?>
                                </select>
							</div>
					 </div>
						
					

			<div class="row">
				<div class="col m10">
							<label for="Child's age">Select your child's age</label>
							<select ='NEW' name = "age">
                    <option value = "">---Select---</option>

                    <?php
						include ('conn.php');

						$newagequery = "SELECT * FROM Book_Age";
						$getage = $conn->query($newagequery);

						if(!$getage){
							echo $conn->error;
						}
					
					while($row = $getage->fetch_assoc()){
		
						echo "
						<option value ={$row['Age']}>{$row['Age']}</option>";
					}
						
					?>


                    </select>
							</div>
					 </div>
				
			

			
            <input name= "submit" class="_xlarge _round " style = "background-color: teal; color: white;  button"  type="submit" value="Submit">
            <input name= "reset" class="_xlarge _round " style = "background-color: teal; color: white;  button " type="reset" value="Reset">
            <br>
        </fieldset>
    </form>

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


