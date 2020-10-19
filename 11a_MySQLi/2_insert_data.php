<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nova";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) 
{
    die("Connection Failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO `user` (`usr_email`, `usr_name`, `usr_contact`)
		VALUES ('nirjhor@mail.org', 'Nirjhor Anjum', '01613211000')";

if ( $conn->query($sql) === TRUE ) 
{
    echo "Your Data is Saved Successfully!";
} 
else 
{
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>