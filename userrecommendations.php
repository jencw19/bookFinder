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
		<?php
		
		if(isset($_SESSION["users"])){
			echo "
		
		
		<li><a href='userrecommendations.php'>Your Recommendations</a></li>";
		}
		?>
		<li><a href="resources.php">Resources</a></li>
		<li><a href="contact.php">Contact</a></li>
		<li><a href="editprofile.php">Edit your profile</a></li>
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
				<div class="mysearch">Your Recommendations</div>
			</div>

</div>


<?php
$username= $_SESSION["users"];

$getfavauth = "SELECT favauth FROM users WHERE username = '{$username}'";
$result = $conn->query($getfavauth);
			if(!$result){
				echo $conn->error;
						}
		
			$numberofrows = $result->num_rows;								
				if ($numberofrows>0){
					while($row = $result->fetch_assoc()){ 

                $favauth =$row['favauth'];
                    }
                }

$recom = "SELECT Books.BookName, Books.Descript, Books.PublicationDate, Books.ISBN, 
Book_Author.author FROM Books INNER JOIN Book_Author ON Books.AuthorID= Book_Author.id 
WHERE Book_Author.author LIKE '$favauth'";

$result = $conn->query($recom);
			if(!$result){
				echo $conn->error;
						}

								
			$numberofrows = $result->num_rows;

			
								
				if ($numberofrows>0){
									
					while($row = $result->fetch_assoc()){ 

						$search=$row["ISBN"];

		//https://openlibrary.org/dev/docs/api/covers external api for book covers
		$imgendpoint = "http://covers.openlibrary.org/b/isbn/{$search}-L.jpg";


		//https://www.youtube.com/watch?v=GSQisyui5iY&t=3s  tutorial to create info on image click with vanilla JS
		echo"<div class='col m4'>
		
		<div class='onclick'
			style='background-image:url($imgendpoint); background-size: contain;'>
			<div><b>{$row['BookName']}</b><br> <b>Description:</b><br>{$row['Descript']}<br>
			<b>Author:</b><br>{$row['author']}<br><b>Publication Date:</b><br>{$row['PublicationDate']}<br></div>
		</div>
		
	</div>";
	
					}
				
   
}

else{
	echo "<div class='row'>
	<div class='col m11'>
	<p><b>Sorry, no results returned<b></p> 
	</div>
	</div>";
}
echo"
</div>
</div>";

	
	
?>

<script>
            var textOverImages=document.querySelectorAll(".onclick div");
                var previousTextOverImage;
            for(var i=0;i<textOverImages.length;i++){
                textOverImages[i].onclick=function(){
                    var classes=this.classList;
                    if(classes.contains("show")){
                        classes.remove("show")
                    }
                    else{
                        if(previousTextOverImage!=null)
                        previousTextOverImage.classList.remove("show");
                        previousTextOverImage=this;
                    classes.add("show");
                     }
                }
            }
            </script>




<div class="row">
			<div class="col m10  ">
				<button class=" _xlarge _round " style = "background-color: teal; color: white;"><a href= "userprofile.php">Your Profile</a></button>
			</div>
			
</div> 
	
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
