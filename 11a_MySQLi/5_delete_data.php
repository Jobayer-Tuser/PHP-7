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

$sql = "DELETE FROM user WHERE id=3";

if ($conn->query($sql) === TRUE) 
{
    echo "Record Deleted Successfully";
} 
else 
{
    echo "Error Deleting Record: " . $conn->error;
}

$conn->close();
?>