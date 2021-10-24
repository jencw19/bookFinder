

<?php
session_start();
include("conn.php");


if(!isset($_SESSION["users"])){
	header("Location: login.php");

}
 
$username= $_SESSION["users"];

 $firstname2 = mysqli_real_escape_string($conn, $_POST['firstname']);
 $surname2 = mysqli_real_escape_string($conn, $_POST['surname']);
 $email2 = mysqli_real_escape_string($conn, $_POST['email']);
 $favauth2 = mysqli_real_escape_string($conn, $_POST['favauth']);
 $favbook2 = mysqli_real_escape_string($conn, $_POST['favbook']);
 $favgen2 = mysqli_real_escape_string($conn, $_POST['favgen']);
 $age2 = mysqli_real_escape_string($conn, $_POST['age']);
  
 
  
 $edit = "UPDATE users SET email = '$email2', firstname = '$firstname2',
         lastname = '$surname2', favauth = '$favauth2', favbook = '$favbook2', favgenre = '$favgen2', childage = $age2
        WHERE username = '{$username}' ";
  
 
  
 $res = $conn->query($edit);
  
 if(!$res){
     echo $conn->error;
 } else {
     header("Location: userprofile.php");
 }
 ?>
 
 
 