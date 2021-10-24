
<?php
 
include('conn.php');
 
$username = mysqli_real_escape_string($conn, $_POST['username']);
$password = mysqli_real_escape_string($conn, $_POST['password']);
$firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
$surname = mysqli_real_escape_string($conn, $_POST['surname']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$favauth = mysqli_real_escape_string($conn, $_POST['favauth']);
$favbook = mysqli_real_escape_string($conn, $_POST['favbook']);
$favgen = mysqli_real_escape_string($conn, $_POST['favgen']);
$age = mysqli_real_escape_string($conn, $_POST['age']);
 
 
$insert = "INSERT INTO users(username, passw, email, usertype, firstname, lastname, favauth, favbook, favgenre, childage) VALUES
('$username', '$password', '$email', '2', '$firstname', '$surname', '$favauth', '$favbook', '$favgen', '$age' )";
  
$res = $conn->query($insert);
 
if(!$res){
    echo $conn->error;
} else {
    header("Location: successsignup.php");
}
?>


