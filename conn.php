<?php
    $passw = "sjDZlLHRLGfmMXP5";
       
    $username = "jwalsh33";
 
    $db = "jwalsh33";
 
    $host = "jwalsh33.lampt.eeecs.qub.ac.uk";
 
    $conn = new mysqli($host, $username, $passw, $db);
 
    if($conn->error){
        echo "not connected".$conn->error;
    }else{
       // echo "connection to DB found.";
    }
 
?>
