<?php

/** INCLUDE PHPExcel LIBRARY **/
    require 'Classes/PHPExcel.php';

/** SET MEMORY LIMIT **/
    ini_set("memory_limit", "500M"); // SET MEMORY LIMIT TO LARGER / TO HANDLE LARGE DATA FILE //


/** OPTIONAL THIS SECTION IS OPTIONAL 
	WHEN YOU WANT TO HANDLE LARGE DATA FILE TO MAKE THE PROCESS SMOOTH 
	YOU CAN CACHE THE DATA IN YOUR SERVER'S TEMPORARY FOLDER
	THE FOLLOWING CODES WILL HELP YOU IN THIS REGARD
**/
$cacheMethod = PHPExcel_CachedObjectStorageFactory:: cache_to_discISAM;
$cacheSettings = array( 'dir'  => 'usr/local/tmp' // If you have a large file you can cache it optional
);
PHPExcel_Settings::setCacheStorageMethod($cacheMethod, $cacheSettings);

/** DATABASE CONNECTION # CHANGE HERE **/
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "sysdb";
    mysql_connect($dbhost,$dbuser,$dbpass);
    mysql_select_db($dbname);

/** YOUR OWN QUERY TO SELECT DATA FROM MYSQL # CHANGE HERE **/
    $query = "SELECT * FROM users";

if ($result = mysql_query($query) or die(mysql_error())) 
{
	/** PHPEXCEL OBJECT # DO NOT CHANGE **/
	$objPHPExcel = new PHPExcel();
	$objPHPExcel->getActiveSheet()->setTitle('Data');
}

/** LOOP OF RESULT SET **/
    $rowNumber = 1; // START FROM ROW 1
    while ($row = mysql_fetch_row($result)) 
	{
		$col = 'A'; // START FROM A
		foreach($row as $cell) 
		{
			$objPHPExcel->getActiveSheet()->setCellValue($col.$rowNumber,$cell);
			$col++;
		}
		$rowNumber++;
	}
   
/** CREATE THE EXCEL FILE HERE **/
	
	# DEFAULT CONFIGURATION OF EXCEL FILE
    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
	
	# DEFINE THE FILE'S NAME # YOU HAVE TO SET YOUR FILE NAME HERE DYNAMICALLY
    header('Content-Disposition: attachment;filename="YOUR_FILE_NAME.xlsx"');
    header('Cache-Control: max-age=0');
	
	# CREATE EXCEL FILE HERE
    $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
    $objWriter->save('php://output');
exit;

?>