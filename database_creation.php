   <?php
//$servername = "localhost";
//$username = "username";
//$password = "password";

// Creating a connection
$conn = new mysqli("localhost","root","");
//Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
 //Creating a database named newDB
$sql = "CREATE DATABASE Shebin";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully with the name Shebin";
} else {
    echo "Error creating database: " . $conn->error;
}
        

 
?>
