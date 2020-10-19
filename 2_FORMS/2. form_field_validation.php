<style>
	.warning { color: red; }
	.success { color: green; }
</style>
<?php 
echo @$_GET['fullname'];

# Jodi Post Method'e asha save tag er value set hoye thake (is set)
if( isset($_POST['save']) )
{
	if( empty($_POST['fullname']) )
		$error = "<span class='warning'>You are empty!</span>";
	else
		$error = "<span class='success'>&#10003;</span>";
}

?>

<form method="post" action="">
	<label>Full Name</label>
	
	<input type="text" name="fullname" /> * <?php echo @$error; ?>
	
	<br />
	<button name="save" type="submit">Save Now</button>
</form>