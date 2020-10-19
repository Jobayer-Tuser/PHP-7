<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) 
{
    die("Connection Failed: " . $conn->connect_error);
} 

$sql = "CREATE DATABASE user";
if ($conn->query($sql) === TRUE) 
{
    echo "Database created Successfully";
} 
else 
{
    echo "Error creating Database: " . $conn->error;
}

$conn->close();
?>