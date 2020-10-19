<html>
<body>

<?php 
echo "<pre>";
print_r($_FILES);

function validateImage($file_error, $file_type, $file_size)
{
	if(
		# in_array Function Finds a Variable Value within a Array Value List
		($file_error == 0) && 
		(
		$file_type == "image/jpeg" || 
		$file_type == "image/jpg" ||
		$file_type == "image/png" ||
		$file_type == "image/gif"
		) &&
		($file_size < 524288000)
	)
		return true;
	else
		return false;
}

if(isset($_POST['Button']))
{
	echo $file1Veridy = validateImage($_FILES['file1']['error'], $_FILES['file1']['type'], $_FILES['file1']['size']);
	echo $file2Veridy = validateImage($_FILES['file2']['error'], $_FILES['file2']['type'], $_FILES['file2']['size']);
	echo $file3Veridy = validateImage($_FILES['file3']['error'], $_FILES['file3']['type'], $_FILES['file3']['size']);
}
?>

<form action="" method="post" enctype="multipart/form-data">

<label for="file">Product Photo 1:</label>
	<input type="file" name="file1" id="file" /><br><br>
<label for="file">Product Photo 2:</label>
	<input type="file" name="file2" id="file" /><br><br>
<label for="file">Product Photo 3:</label>
	<input type="file" name="file3" id="file" /><br><br>
<input type="submit" name="Button" value="Submit">

</form>

</body>
</html>