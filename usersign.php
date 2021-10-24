<?php
session_start();
include('conn.php');
$username = $_POST["userfield"];
$pass = $_POST["passfield"];

$checkuser = "SELECT * FROM users WHERE username ='$username' AND passw ='$pass' ";

$result = $conn->query($checkuser);


if(!$result){
    echo $conn->error;
    
}

$numberofrows = $result->num_rows;

if ($numberofrows>0){
    $_SESSION["users"]= $username;
    header("Location: userprofile.php");
}else{
    
    header("Location: login.php");
    

}
?>