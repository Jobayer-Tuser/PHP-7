<?php
// Connection to the Database
$conn = mysqli_connect("localhost", "root", "", "primax");

if( mysqli_connect_errno() )
	echo "Failed to connect to MySQL: " . mysqli_connect_error();

require_once 'Excel/reader.php';
$data = new Spreadsheet_Excel_Reader();
$data->setOutputEncoding('CP1251');
$data->read('Upload.xls');
 

 
for ($x = 2; $x <= count($data->sheets[0]["cells"]); $x++) 
{
    $name = $data->sheets[0]["cells"][$x][1];
    $email = $data->sheets[0]["cells"][$x][2];
    $mobile = $data->sheets[0]["cells"][$x][3];
	$address = $data->sheets[0]["cells"][$x][4];
    $sql = "INSERT INTO `students` (`name`,`email`,`mobile`,`address`) 
        VALUES ('$name','$email','$mobile','$address')";
    echo $sql."\n";
    mysqli_query($conn,$sql);
}

?>