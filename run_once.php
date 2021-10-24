<?php
include("conn.php");

$file = "books_data.csv";

if (file_exists($file)){

    $filepath = fopen($file, "r");

    while( ($line = fgetcsv($filepath)) !== FALSE){
        //$line[1] = $conn -> real_escape_string($line[1]);
        //$line[3] = $conn -> real_escape_string($line[3]);
        //$line[4] = $conn -> real_escape_string($line[4]);
        //$line[0] = $conn -> real_escape_string($line[0]);
        //$line[2] = $conn -> real_escape_string($line[2]);
        //$line[9] = $conn -> real_escape_string($line[9]);
        //$line[12] = $conn -> real_escape_string($line[12]);
        
        //$covertype = strpos($line[8], "PaperBack");
        //if($covertype !== false){
          //  $line[8] = 2;
        //}
        //$covertype = strpos($line[8], "Hardcover");
        //if($covertype !== false){
          //  $line[8]= 1;
        //}
        //$covertype = strpos($line[8], "BoardBook");
        //if($covertype !== false){
          //  $line[8]= 3;
        //}
        

       // $insert =
       // "INSERT INTO Book_Author (author)
        //VALUES ('{$line[3]}')";

        //$insert = 
        //"INSERT INTO Book_Series (SeriesName)
        //VALUES ('{$line[1]}')";

        //$insert =
        //"INSERT INTO Book_Age (Age)
        //VALUES ('{$line[4]}')";
        //$insert =
        //"INSERT INTO ISBN (ISBN)
        //VALUES ({$line[10]})";

        


       // $insert =
        //"INSERT INTO Books (BookName, Descript,CoverTypeID, PublicationDate, LinkToAmazon)
        //VALUES ('{$line[0]}','{$line[2]}' '$covertype','{$line[9]}','{$line[12]}')";
        //$insert =
       // "INSERT INTO Books (ISBN)
        //VALUES ({$line[10]})";

         $result = $conn->query($insert);

       if(!$result){
           echo $conn->error;
           echo $insert;
           dies();

           
       }
    }
    
   
}
