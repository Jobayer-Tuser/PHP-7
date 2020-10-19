<html>
<body>

<?php 
echo "<pre>";
print_r($_FILES);


if(isset($_POST['Button']))
{
	if(
		(($_FILES['file1']['error'] == 0) && ($_FILES['file2']['error'] == 0)) && 
		( 
			(
				$_FILES['file1']['type'] == "application/msword" || 
				$_FILES['file1']['type'] == "application/vnd.openxmlformats-officedocument.wordprocessingml.document" ||
				$_FILES['file1']['type'] == "application/pdf" ||
				$_FILES['file1']['type'] == "text/plain"
			) && 
			(
				$_FILES['file2']['type'] == "image/jpeg" || 
				$_FILES['file2']['type'] == "image/jpg" ||
				$_FILES['file2']['type'] == "image/png" ||
				$_FILES['file2']['type'] == "image/gif"
			)
		) &&
		( ($_FILES['file1']['size'] < 999999) && ($_FILES['file2']['size'] < 999999) )
	)
	{
		$result = "TRUE";
	}
	else
		$result = "FALSE";
	
	if($result == "TRUE")
	{
		if ( !empty($_FILES['file1']['name']) && !empty($_FILES['file2']['name']) )
		{
			move_uploaded_file($_FILES['file1']['tmp_name'], "document/" . $_FILES['file1']['name']);
			move_uploaded_file($_FILES['file2']['tmp_name'], "ident/" . $_FILES['file2']['name']);
			
			echo "Both Files are Uploaded<br /><br />";
		}
		else if( !empty($_FILES['file1']['name']) && empty($_FILES['file2']['name']) )
		{
			move_uploaded_file($_FILES['file1']['tmp_name'], "document/" . $_FILES['file1']['name']);
			
			echo "CV/Resume is Uploaded without Voter ID.<br /><br />";
		}
		else if( empty($_FILES['file1']['name']) && empty($_FILES['file2']['name']) )
		{
			echo "Nothing to Upload<br /><br />";
		}
		else if(  empty($_FILES['file1']['name']) && !empty($_FILES['file2']['name']) )
		{
			echo "You can not upload only the 2nd File, you must have to upload First File<br /><br />";
		}
	}
	else if($result == "FALSE")
		echo "You are trying to upload Wrong file Format! Please try correct format!";
		
}
?>

<form action="" method="post" enctype="multipart/form-data">

<label for="file">CV/Resume:</label>
<input type="file" name="file1" id="file" /><br><br>
<label for="file">Voter ID:</label>
<input type="file" name="file2" id="file" /><br><br>
<input type="submit" name="Button" value="Submit">

</form>

</body>
</html>