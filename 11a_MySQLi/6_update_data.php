<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nova";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "UPDATE user SET usr_name='Anjum' WHERE usr_id=2";

if ( $conn->query($sql) === TRUE ) 
{
    echo "Record updated successfully";
} 
else 
{
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>