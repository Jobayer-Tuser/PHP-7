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

$sql = "INSERT INTO `user` (`usr_name`, `usr_contact`, `usr_email`)
		VALUES ('Nirjhor Anjum', '01613211000', 'nirjhor@mail.org')";

if ($conn->query($sql) === TRUE)
{
    $last_id = $conn->insert_id;
    echo "New record created Successfully. Last Inserted ID is: " . $last_id;
} 
else 
{
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>