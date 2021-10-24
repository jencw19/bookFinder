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
			<div class="col m12">
				<div class="mysearch" style = "padding-bottom = 30px">Featured</div>
			</div>

		</div>


<?php
//API BEING IMPLEMENTED
$endpoint = "http://jwalsh33.lampt.eeecs.qub.ac.uk/projectAPI/proapi.php?featured&apikey=42a60a84579dbdfcf70369ca7aa2ba7a";
$result = file_get_contents($endpoint);

$data = json_decode($result, true);
if(empty($data)){
	echo "<div class='row'>
	<div class='col m11'>
	<p><b>Sorry, no results returned<b></p> 
	</div>
	</div>";
}

	echo "<div class='row'>
	<div class='col m11'>
	<ol>";
	foreach($data as $row){

		$search=$row["ISBN"];

	   //https://openlibrary.org/dev/docs/api/covers external api for book covers
		$imgendpoint = "http://covers.openlibrary.org/b/isbn/{$search}-L.jpg";

		//https://www.youtube.com/watch?v=GSQisyui5iY&t=3s  tutorial to create info on image click with vanilla JS
		echo"<div class='col m4'>
		
	<div class='onclick'
		style='background-image:url($imgendpoint); background-size: contain;'>
			<div><b>{$row['BookName']}</b><br> <b>Description:</b><br>{$row['Description']}<br>
			<b>Author:</b><br>{$row['Author']}<br><b>Publication Date:</b><br>{$row['Publication Date']}<br></div>
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
