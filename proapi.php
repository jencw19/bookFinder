<?php
include ("conn.php");


header ('Content-Type: application/json');

if(isset($_GET['apikey'])){

    $apikey = $_GET['apikey'];
    $checkapi = "SELECT * FROM bookapi_auth WHERE api = '$apikey'";
    $result = $conn->query($checkapi);

    if(!$result){
        echo $conn->error;
    }

    $numofrows=$result->num_rows;

    if(!$numofrows > 0){
        echo 'invalid api key';
    }else{
        
    


    

//SEARCH FOR A SELECTED AGE

if(isset($_GET['age'])){
    $age = $_GET['age'];
    $read = "SELECT Books.BookName, Books.Descript, Books.PublicationDate, Books.ISBN, 
    Book_Author.author FROM Books INNER JOIN Book_Author ON Books.AuthorID= Book_Author.id 
    WHERE Books.BookAgeID =  {$age} ";
    $result = $conn->query($read);
    if(!$result){
        echo $conn->error;
     }
    $dataset= array();
    while ($row= $result->fetch_assoc()){
        //$title = 
        $array = array(
            "ISBN" => $row ['ISBN'],
            "BookName" => $row['BookName'],
            "Description" => $row['Descript'],
            "Author" => $row['author'],
            "Publication Date" => $row['PublicationDate']
            
            ); 
            $arr = array_map('utf8_encode', $array);
            array_push($dataset, $arr);
           
    }
    echo json_encode($dataset);
    


    
}
//SEARCH FOR A SELECTED AUTHOR
if(isset($_GET['author'])){

    $auth = $_GET['author'];
    $read = "SELECT Books.BookName, Books.Descript, Books.PublicationDate, Books.ISBN,
    Book_Author.author FROM Books INNER JOIN Book_Author ON Books.AuthorID= Book_Author.id 
    WHERE Books.AuthorID = {$auth} ";
    $result = $conn->query($read);
    if(!$result){
        echo $conn->error;
     }
    $dataset= array();
    while ($row= $result->fetch_assoc()){
        //$title = 
        $array = array(
            "ISBN" => $row ['ISBN'],
            "BookName" => $row['BookName'],
            "Description" => $row['Descript'],
            "Author" => $row['author'],
            "Publication Date" => $row['PublicationDate']
            
            ); 
            $arr = array_map('utf8_encode', $array);
            array_push($dataset, $arr);
           
    }
    echo json_encode($dataset);
    
}

//SEARCH FOR A SELECTED GENRE
if(isset($_GET['genre'])){

    $gen = $_GET['genre'];
    $read = "SELECT Books.BookName, Books.Descript, Books.PublicationDate, Books.ISBN, 
    Book_Author.author FROM Books INNER JOIN Book_Author ON Books.AuthorID= Book_Author.id 
    WHERE BookGenreID = {$gen} ";
    $result = $conn->query($read);
    if(!$result){
        echo $conn->error;
     }
    $dataset= array();
    while ($row= $result->fetch_assoc()){
        //$title = 
        $array = array(
            "ISBN" => $row ['ISBN'],
            "BookName" => $row['BookName'],
            "Description" => $row['Descript'],
            "Author" => $row['author'],
            "Publication Date" => $row['PublicationDate'],
            
            
            ); 
            $arr = array_map('utf8_encode', $array);
            array_push($dataset, $arr);
           
    }
    echo json_encode($dataset);
    
}

//SEARCH FOR A SELECTED BOOK SERIES
if(isset($_GET['series'])){

    $series = $_GET['series'];
    $read = "SELECT Books.BookName, Books.Descript, Books.PublicationDate, Books.ISBN, 
    Book_Author.author FROM Books INNER JOIN Book_Author ON Books.AuthorID= Book_Author.id 
    WHERE BookSeriesID = {$series} ";
    $result = $conn->query($read);
    if(!$result){
        echo $conn->error;
    
     }
    $dataset= array();
    while ($row= $result->fetch_assoc()){
        //$title = 
        $array = array(
            "ISBN" => $row ['ISBN'],
            "BookName" => $row['BookName'],
            "Description" => $row['Descript'],
            "Author" => $row['author'],
            "Publication Date" => $row['PublicationDate'],
            
            
            ); 
            $arr = array_map('utf8_encode', $array);
            array_push($dataset, $arr);
           
    }
    echo json_encode($dataset);
    
} 
// SEARCH FOR A SELECTED BOOK
if(isset($_GET['BookName'])){

    $book = $_GET['BookName'];
    $read = "SELECT Books.BookName, Books.Descript, Books.PublicationDate, Books.ISBN, 
    Book_Author.author FROM Books INNER JOIN Book_Author ON Books.AuthorID= Book_Author.id 
    WHERE Books.ID = {$book} ";
    $result = $conn->query($read);
    if(!$result){
        echo $conn->error;
     }
    $dataset= array();
    while ($row= $result->fetch_assoc()){
        //$title = 
        $array = array(
            "ISBN" => $row ['ISBN'],
            "BookName" => $row['BookName'],
            "Description" => $row['Descript'],
            "Author" => $row['author'],
            "Publication Date" => $row['PublicationDate']
            
            ); 
            $arr = array_map('utf8_encode', $array);
            array_push($dataset, $arr);
           
    }
    echo json_encode($dataset);
    
}
//https://stackoverflow.com/questions/12125904/select-last-n-rows-from-mysql
// SEARCH TO FIND 20 MOST RECENTLY ADDED BOOKS

if(isset($_GET['new'])){

    $new = $_GET['new'];
    $read = "SELECT 
    BookName, Descript, PublicationDate, ISBN, Book_Author.author
FROM
    `Books`
    INNER JOIN Book_Author ON Books.AuthorID= Book_Author.id
ORDER BY Books.ID DESC
LIMIT 20";
    $result = $conn->query($read);
    if(!$result){
        echo $conn->error;
     }
    $dataset= array();
    while ($row= $result->fetch_assoc()){
        //$title = 
        $array = array(
            "ISBN" => $row ['ISBN'],
            "BookName" => $row['BookName'],
            "Description" => $row['Descript'],
            "Author" => $row['author'],
            "Publication Date" => $row['PublicationDate']
            
            ); 
            $arr = array_map('utf8_encode', $array);
            array_push($dataset, $arr);
           
    }
    echo json_encode($dataset);
    
}
//SEARCH FOR BOOKS WITH RATING OF 5
if(isset($_GET['trending'])){

    $trending = $_GET['trending'];
    $read = "SELECT Books.BookName, Books.Descript, Books.PublicationDate, Books.ISBN,  
    Book_Author.author FROM Books INNER JOIN Book_Author ON Books.AuthorID= Book_Author.id 
    WHERE Books.rating = 5";
    $result = $conn->query($read);
    if(!$result){
        echo $conn->error;
     }
    $dataset= array();
    while ($row= $result->fetch_assoc()){
        //$title = 
        $array = array(
            "ISBN" => $row ['ISBN'],
            "BookName" => $row['BookName'],
            "Description" => $row['Descript'],
            "Author" => $row['author'],
            "Publication Date" => $row['PublicationDate']
            
            ); 
            $arr = array_map('utf8_encode', $array);
            array_push($dataset, $arr);
           
    }
    echo json_encode($dataset);
    
}
//SEARCH FOR 20 RANDOM BOOKS
if(isset($_GET['featured'])){

    $featured = $_GET['featured'];
    $read = "SELECT Books.BookName, Books.Descript, Books.PublicationDate, Books.ISBN,  
    Book_Author.author FROM Books INNER JOIN Book_Author ON Books.AuthorID= Book_Author.id 
    ORDER BY RAND()
    LIMIT 20";
    $result = $conn->query($read);
    if(!$result){
        echo $conn->error;
     }
    $dataset= array();
    while ($row= $result->fetch_assoc()){
        //$title = 
        $array = array(
            "ISBN" => $row ['ISBN'],
            "BookName" => $row['BookName'],
            "Description" => $row['Descript'],
            "Author" => $row['author'],
            "Publication Date" => $row['PublicationDate']
            
            ); 
            $arr = array_map('utf8_encode', $array);
            array_push($dataset, $arr);
           
    }
    echo json_encode($dataset);
    
}

//SEARCH FOR ANYWORD
if ($_SERVER["REQUEST_METHOD"]==="POST"){

    $search1 = $_POST['var1'];

    $read = "SELECT Books.BookName, Books.Descript, Books.PublicationDate, Books.ISBN,
    Book_Author.author FROM Books INNER JOIN Book_Author ON Books.AuthorID= Book_Author.id 
    WHERE Books.BookName LIKE ($search1) ";
    $result = $conn->query($read);
    if(!$result){
        echo $conn->error;
     }
    $dataset= array();
    while ($row= $result->fetch_assoc()){
        //$title = 
        $array = array(
            "ISBN" => $row ['ISBN'],
            "BookName" => $row['BookName'],
            "Description" => $row['Descript'],
            "Author" => $row['author'],
            "Publication Date" => $row['PublicationDate'],
            
            
            ); 
            $arr = array_map('utf8_encode', $array);
            array_push($dataset, $arr);
           
    }
    echo json_encode($dataset);
    
}

    }
}



?>