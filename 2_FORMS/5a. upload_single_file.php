<html>
<body>

<?php 


if(isset($_POST['Button']))
{
	
	echo "<pre>";
	print_r($_FILES);

	/*
		$_FILES = AN ARRAY THAT IS CONTAINING ALL THE INFORMATION RELATED TO YOUR UPLOADED FILE / PREDEFINED ARRAY
		$_FILES['TAG_NAME']['name'] = NAME OF YOUR UPLOADED FILE
		$_FILES['TAG_NAME']['type'] = TYPE OF YOUR UPLOADED FILE
		$_FILES['TAG_NAME']['size'] = SIZE OF YOUR UPLOADED FILE
		$_FILES['TAG_NAME']['error'] = ERROR NO OF YOUR UPLOADED FILE
		$_FILES['TAG_NAME']['tmp_name'] = TEMPORARY LOCATION OF YOUR UPLOADED FILE
	*/
	
	$myExtension = array("jpg", "png", "jpeg", "gif");
	
	$filenameArray = explode( ".", $_FILES['photo']['name'] ); // explode() Function
	$fileExtension = end($filenameArray); // end() Function // Value = jpg 
	
	if(
		# in_array Function Finds a Variable Value within a Array Value List
		($_FILES['photo']['error'] == 0) && 
		in_array($fileExtension, $myExtension) &&
		(
		$_FILES['photo']['type'] == "image/jpeg" || 
		$_FILES['photo']['type'] == "image/jpg" ||
		$_FILES['photo']['type'] == "image/png" ||
		$_FILES['photo']['type'] == "image/gif"
		) &&
		($_FILES['photo']['size'] < 999999)
	)
	{
		// move_uploaded_file(SOURCE, DESTINATION)
		$temporarUploadedFile = $_FILES['photo']['tmp_name'];
		$folderName = "uploads/";
		$filesNewName = "PROPIC_" . date("YmdHis") . rand(100000,999999) . "_". $_FILES['photo']['name'];
		$finalDestination = $folderName . $filesNewName;

		# move_uploaded_file(TEMPORARY_DESTINATION, FINAL_DESTINATION);
		move_uploaded_file($temporarUploadedFile, $finalDestination);
		echo "You have successfully Uploaded the File";
	}
	else
	{
		echo "Sorry! Wrong file. Please try correct File.";
	}
}
?>


<form action="" method="post" enctype="multipart/form-data">

	<label for="file">Upload your File:</label>	<input type="file" name="photo" id="file" />
	<br>
	<input type="submit" name="Button" value="Submit">

</form>

</body>
</html>