<html>
<body>

<?php
##### INCLUDE THE PHP EXCEL LIBRARY WITH YOUR PROJECT #####
require 'Classes/PHPExcel.php';
require_once 'Classes/PHPExcel/IOFactory.php';
##### INCLUDE THE PHP EXCEL LIBRARY WITH YOUR PROJECT #####

if(isset($_POST['excel_submit']))
{
	##### GETTING FILE INFORMATION #####
	$getFileName = explode(".", $_FILES['file']['name']); 
	$extenSion = end($getFileName); // GET FILE EXTENSION # end() RETURNS THE LAST VALUE OF ARRAY
	
	$fileName = $_FILES['file']['name']; // FILE NAME
	
	##### TO GET DATABASE CONNECTION ##### CHANGE HERE ONLY #####
	$conn = mysqli_connect("localhost","root","");
	mysqli_select_db($conn, "sysdb");
	##### TO GET DATABASE CONNECTION ##### CHANGE HERE ONLY #####

	if($extenSion == "xls")
		$objReader = PHPExcel_IOFactory::createReader('Excel5'); // Call the XLS Reading Function
	else if ($extenSion == "xlsx")
		$objReader = PHPExcel_IOFactory::createReader('Excel2007'); // Call the XLSX Reading Function
	
	$objReader->setReadDataOnly(true);
	$objPHPExcel = $objReader->load($fileName); // Format
	$objWorksheet = $objPHPExcel->getActiveSheet();
	$highestRow = $objWorksheet->getHighestRow(); // e.g. 10
	$highestColumn = $objWorksheet->getHighestColumn(); // e.g 'F'
	$highestColumnIndex = PHPExcel_Cell::columnIndexFromString($highestColumn); // e.g. 5

	# FOR LOOP // 
	for ($row = 2; $row <= $highestRow; ++$row)
	{
		for ($col = 0; $col < $highestColumnIndex; ++$col)
		{
			echo "ROW: " . $row . " COLUMN: " . $col . "<br />";
			$getDataFromExcel[$row-1][$col+1] = $objWorksheet->getCellByColumnAndRow($col, $row)->getValue();
		}
	}
	$counteD = 0;
	for($R=1, $sqlCount=0; $R <= count($getDataFromExcel) ; $R++)
	{
		##### MYSQL QUERY TO STORE YOUR DATA ##### CHANGE HERE ONLY #####
		$sql = mysqli_query($conn, " 
		INSERT INTO `users` (`full_name`, `email_id`,`phone_no`,`full_address`) 
		VALUES ('".$getDataFromExcel[$R][1]."', '".$getDataFromExcel[$R][2]."', '".$getDataFromExcel[$R][3]."', '".$getDataFromExcel[$R][4]."') 
		"); 
		if($sql)
			$counteD++;
		##### MYSQL QUERY TO STORE YOUR DATA ##### CHANGE HERE ONLY #####
	}

	echo $counteD . " Rows Inserted!";
}
?>

phpExcel with 360 Degree - Powered By NIRJHOR ANJUM :P
<br /><br />

<form name="input" action="" method="post" enctype="multipart/form-data">
Upload Excel: <input type="file" name="file">
<input type="submit" name="excel_submit" value="Submit">
</form>
</body>
</html>