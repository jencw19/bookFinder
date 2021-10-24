<?php
if (isset($_POST['submit'])){
    
    $q= $conn->real_escape_string($_POST['q']);
    $column = $conn->real_escape_string($_POST['column']);

    if ($column== "" || ($column != "BookName" ))
    $column = "BookName";

    echo $result;
    
            

    $sql = $conn->query( "SELECT Books.BookName, Books.Descript, Books.PublicationDate, 
    Book_Author.author FROM Books INNER JOIN Book_Author ON Books.AuthorID= Book_Author.id 
    WHERE Books.BookName LIKE '%$q%'");
    if ($sql->num_rows >0){
        while ($data = $sql->fetch_array())
        
            

        echo "
        <b>{$data['BookName']}</b><br>
        <b>Description:</b><br>{$data['Descript']}<br>
	 <b>Author:</b><br>{$data['author']}<br>
	 <b>Publication Date:</b><br>{$data['PublicationDate']}<br> 
        
        ";

    }else 
    echo "your search query doesn't match any data";
}


?>


