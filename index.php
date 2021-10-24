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

<!--https://www.w3schools.com/howto/tryit.asp?filename=tryhow_css_js_dropdown_filter ALL DROP DOWNS IMPLEMENTED ON THIS PAGE
	https://stackoverflow.com/questions/21983819/making-a-drop-down-menu-scrollable/21983896 MAKING DROPDOWN SCROLLABLE-->


	<div class="mybackround">
		<div class="row">
			<div class="col m4">
				<div class="dropdownbottom" style="background-color= teal">
							<button onclick="myFunction4()" class="dropbuttonbottom" style="background-color= teal">Search Book Titles</button>
							<div id="myDropdown5" class="dropdownbottom-content" style = "background-color: teal, color: white">;
    

							  <input type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction4()">
								<?php
								include ('conn.php');

								$bookquery = "SELECT ID, BookName FROM Books";
								$getbook = $conn->query($bookquery);

								if(!$getbook){
									echo $conn->error;
								}
									while($row = $getbook->fetch_assoc()){ 
										echo "<a href='Booksearch.php?filter={$row['ID']}'>{$row['BookName']}</a>";
									}
								?>
							</div>
					 </div>
			</div>
		</div>


		<div class="row">

			<div class="col m12">
				<div class="description">
					<div class="mydescription1">
						Looking for your child's next favourite read?
					</div>
					<div class="mydescription1">
						Let us help you!
					</div>
					<div class="mydescription3">
						Our Bookfinder will help you discover the very best kids' books: magical mysteries, astonishing
						adventures and fantastic non-fiction. Lets get reading!
						
					</div>

				</div>



			</div>
		</div>


		<div class="row">
			<div class="col m12">
				<div class="mysearch">Search By Age</div>
			</div>
		</div>

			<div class="row">
				<div class="col m4">
					<div class="myage">Age 0-1</div>
						<a href=age.php?filter=1>
						<img src='https://images.unsplash.com/photo-1504151932400-72d4384f04b3?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=749&q=80'
						alt=''>			
				</div>

				<div class="col m4">
					<div class="myage">Age 2-3</div>
                    <a href=age.php?filter=2><img
						src="https://images.unsplash.com/flagged/photo-1551887373-6edba6dacbb1?ixid=MXwxMjA3fDB8MHxzZWFyY2h8NXx8dG9kZGxlciUyMHJlYWRpbmd8ZW58MHx8MHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
						alt="">
				</div>

				<div class="col m4">
					<div class="myage">Age 4-5</div>
                    <a href=age.php?filter=3><img
						src="https://images.unsplash.com/photo-1558576997-eac36a2f8c7a?ixid=MXwxMjA3fDB8MHxzZWFyY2h8N3x8Y2hpbGQlMjByZWFkaW5nfGVufDB8fDB8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
						alt="">
				</div>
          </div> 
			
	
			<div class="row">
				<div class="col m4">
					<div class="myage">Age 6-8</div>
					<a href="age.php?filter=4"><img
						src="https://images.unsplash.com/photo-1549737221-bef65e2604a6?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MTB8fGNoaWxkJTIwcmVhZGluZ3xlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
						alt="">
				</div>

				<div class="col m4">
					<div class="myage">Age 9-11</div>
					<a href="age.php?filter=5"><img
							src="https://images.unsplash.com/photo-1596496555041-9e0f141ca4b7?ixid=MXwxMjA3fDB8MHxzZWFyY2h8Nnx8dGVlbiUyMHJlYWRpbmd8ZW58MHx8MHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
							alt=""></a>
				</div>

				<div class="col m4">
					<div class="myage">Age 12+</div>
					<a href="age.php?filter=6">
						<img
						src="https://images.unsplash.com/photo-1603537020556-89c5d3429d1b?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MTV8fHRlZW4lMjByZWFkaW5nfGVufDB8fDB8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
						alt=""></a>
				</div>
			</div>

			<div class="row">
				<div class="col m4">
					<div class="mysearch" >Search By Genre</div>
						<img
						src="https://images.unsplash.com/photo-1532774682361-95f0831019d7?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1079&q=80"
						alt="">

						<div class="dropdownbottom" style = "bottom : 0px">
							<button onclick="myFunction()" class="dropbuttonbottom"style = "padding-top: 30px">Select Genre</button>
							<div id="myDropdown2" class="dropdownbottom-content" style = "bottom : 40px">
							  <input type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction()">
								<?php
								include ('conn.php');

								$genrequery = "SELECT * FROM Book_Genre";
								$getgenre = $conn->query($genrequery);

								if(!$getgenre){
									echo $conn->error;
								}
									while($row = $getgenre->fetch_assoc()){ 
										echo "<a href='genre.php?filter={$row['id']}'>{$row['Genre']}</a>";
									}
								?>
							</div>
					 </div>
				</div>


				<div class="col m4">
					<div class="mysearch">Search By Author</div>
						<img
						src="https://images.unsplash.com/photo-1472162072942-cd5147eb3902?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=1050&q=80"
						alt="">
						<div class="dropdownbottom" style ="bottom: 0px">
							<button onclick="myFunction2()" class="dropbuttonbottom">Select Author</button>
							<div id="myDropdown3" class="dropdownbottom-content" style = "bottom: 40px">
							  <input type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction2()">
						

							<?php
						include ('conn.php');

						$authorquery = "SELECT * FROM Book_Author";
						$getauthor = $conn->query($authorquery);

							if(!$getauthor){
								echo $conn->error;
							}
					
								while($row = $getauthor->fetch_assoc()){
						
									echo 
									"<a href='author.php?filter={$row['id']}'>{$row['author']}</a>";
							
								}
							?>

							</div>
						</div>
				
				</div>


				<div class='col m4'>
					<div class="mysearch">Search By Book Series</div><img
						src="https://images.unsplash.com/photo-1577381450259-bb496a00a06a?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80"
						alt="">
						<div class="dropdownbottom" style = "bottom: 0 px">
							<button onclick="myFunction3()" class="dropbuttonbottom">Select Book Series</button>
							<div id="myDropdown4" class="dropdownbottom-content" style = "bottom: 40px">
							  <input type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction3()">
							
						
					<?php
						include ('conn.php');

						$seriesquery = "SELECT * FROM Book_Series";
						$getseries = $conn->query($seriesquery);

						if(!$getseries){
							echo $conn->error;
						}
					
					while($row = $getseries->fetch_assoc()){
		
						echo "
						<a href='series.php?filter={$row['id']}'>{$row['SeriesName']}</a>";
					}
						
					?>
						</div>
					</div>
				</div>
			</div>



				<script>
						  /* When the user clicks on the button,
						  toggle between hiding and showing the dropdown content */
						  function myFunction() {
							document.getElementById("myDropdown2").classList.toggle("show");
						  }
						  
						  function filterFunction() {
							var input, filter, ul, li, a, i;
							input = document.getElementById("myInput");
							filter = input.value.toUpperCase();
							div = document.getElementById("myDropdown2");
							a = div.getElementsByTagName("a");
							for (i = 0; i < a.length; i++) {
							  txtValue = a[i].textContent || a[i].innerText;
							  if (txtValue.toUpperCase().indexOf(filter) > -1) {
								a[i].style.display = "";
							  } else {
								a[i].style.display = "none";
							  }
							}
						  }
						  </script>

<script>
						  /* When the user clicks on the button,
						  toggle between hiding and showing the dropdown content */
						  function myFunction2() {
							document.getElementById("myDropdown3").classList.toggle("show");
						  }
						  
						  function filterFunction2() {
							var input, filter, ul, li, a, i;
							input = document.getElementById("myInput");
							filter = input.value.toUpperCase();
							div = document.getElementById("myDropdown3");
							a = div.getElementsByTagName("a");
							for (i = 0; i < a.length; i++) {
							  txtValue = a[i].textContent || a[i].innerText;
							  if (txtValue.toUpperCase().indexOf(filter) > -1) {
								a[i].style.display = "";
							  } else {
								a[i].style.display = "none";
							  }
							}
						  }
						  </script>

<script>
						  /* When the user clicks on the button,
						  toggle between hiding and showing the dropdown content */
						  function myFunction3() {
							document.getElementById("myDropdown4").classList.toggle("show");
						  }
						  
						  function filterFunction3() {
							var input, filter, ul, li, a, i;
							input = document.getElementById("myInput");
							filter = input.value.toUpperCase();
							div = document.getElementById("myDropdown4");
							a = div.getElementsByTagName("a");
							for (i = 0; i < a.length; i++) {
							  txtValue = a[i].textContent || a[i].innerText;
							  if (txtValue.toUpperCase().indexOf(filter) > -1) {
								a[i].style.display = "";
							  } else {
								a[i].style.display = "none";
							  }
							}
						  }
						  </script>

<script>
						  /* When the user clicks on the button,
						  toggle between hiding and showing the dropdown content */
						  function myFunction4() {
							document.getElementById("myDropdown5").classList.toggle("show");
						  }
						  
						  function filterFunction4() {
							var input, filter, ul, li, a, i;
							input = document.getElementById("myInput");
							filter = input.value.toUpperCase();
							div = document.getElementById("myDropdown4");
							a = div.getElementsByTagName("a");
							for (i = 0; i < a.length; i++) {
							  txtValue = a[i].textContent || a[i].innerText;
							  if (txtValue.toUpperCase().indexOf(filter) > -1) {
								a[i].style.display = "";
							  } else {
								a[i].style.display = "none";
							  }
							}
						  }
						  </script>

			
			
		

        


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

