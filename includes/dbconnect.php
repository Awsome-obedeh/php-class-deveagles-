<?php  
    define('HOST','localhost');
    define('DB_USER', 'root');
    define('PASSWORD', '');
    define('DB_NAME', 'deveagles');
 
    // create a connection with the database
    $conn= new mysqli(HOST, DB_USER, PASSWORD, DB_NAME);
    // if our database did not connect, I want to see  the reason as to why it did not connect
    
   
    if($conn->connect_error){
        // kill the connection  if it tres and doesn't connect
        die("could not connect" . mysqli_connect_error());
    }



?>