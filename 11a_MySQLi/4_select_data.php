<?php
# DATABASE CREDENTIAL
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nova";

# CONNECT TO DATABASE
$conn = new mysqli($servername, $username, $password, $dbname);

# CHECK DATABASE CONNECTIVITY
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}

# QUERY
$sql = "SELECT `usr_id`, `usr_name`, `usr_contact` FROM `user`";

# RUN THE QUERY
$result = $conn->query($sql);

# num_rows = GET THE NUMBER OF RETURNED ROWS FROM YOUR SELECT QUERY
if ($result->num_rows > 0) 
{
	/* 
		while() LOOP runs until the Rows are Fetched up-to the last one
		Each time one row is saved in the $row Array
		Next, the fetched row's Data is printed by Column Name (Index)
	*/
	echo '<table style="width:100%">
		<tr style="background:#BDBDBD;color:white;">
		<td>User ID</td>
		<td>Full Name</td>
		<td>Contact Name</td>
		</tr>';
	
	# fetch_assoc() Function Grabs a Single Row of Data
    while( $row = $result->fetch_assoc() ) 
	{
		echo '
		<tr>
		<td>' . $row["usr_id"]. '</td>
		<td>' . $row["usr_name"]. '</td>
		<td>' . $row["usr_contact"]. '</td>
		</tr>
		';
    }
	
	echo '</table>';
} 
else 
{
    echo "No Data Found!";
}

# CONNECTION CLOSED
$conn->close();

?>